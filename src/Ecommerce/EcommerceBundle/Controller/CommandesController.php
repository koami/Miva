<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;

class CommandesController extends Controller
{
    public function facture()
    {
        $em = $this->getDoctrine()->getManager();
        $generator = $this->container->get('security.secure_random');
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalSR = 0;
        $totalRed = 0;

        $livraison = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        foreach($produits as $produit)
        {
            $prixSR = ($produit->getPrix() * $panier[$produit->getId()]);
            $reduction = ($produit->getReduction() / 100);
            $prixRed = ( ($produit->getPrix() * $panier[$produit->getId()]) * (1 - $reduction ) );
            $totalSR += $prixSR;

            if (!isset($commande['reduction']['%'.$produit->getReduction()]))
                $commande['reduction']['%'.$produit->getReduction()] = round($prixRed - $prixSR,2);
            else
                $commande['reduction']['%'.$produit->getReduction()] += round($prixRed - $prixSR,2);

            $totalRed += round($prixRed - $prixSR,2);

            $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
                'quantite' => $panier[$produit->getId()],
                'reduction' => $produit->getReduction(),
                'garantie' => $produit->getGarantie(),
                'prixSR' => round($produit->getPrix(),2),
                'prixRed' => round($produit->getPrix() * (1 - $reduction ),2));
        }

        $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
            'nom' => $livraison->getNom(),
            'telephone' => $livraison->getTelephone(),
            'adresse' => $livraison->getAdresse(),
            'quartier' => $livraison->getQuartier(),
            'complement' => $livraison->getComplement());

        $commande['prixSR'] = round($totalSR,2);
        $commande['prixRed'] = round($totalSR + $totalRed,2);
        $commande['token'] = bin2hex($generator->nextBytes(20));

        return $commande;
    }

    public function prepareCommandeAction(){
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $kaba = $session->get('kaba'); // recuperation de la session kaba
        if (!$session->has('commande')){
            $commande = new Commandes();
        }
        else {
            $commande = $em->getRepository('EcommerceBundle:Commandes')->find($session->get('commande'));
        }

        // attribution des valeur à la variable kabba
        if ($kaba['kaba'] != null) {
            $kabba = $kaba['kaba'];
        }else{
            $kabba = 0;
        }

        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setKabba($kabba);
        $commande->setLivrer(0);
        $commande->setCommande($this->facture());

        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande',$commande);
        }

        $em->flush();
        $session->remove('commande'); //Supperssion de la session kaba

        return new Response($commande->getId());
    }


    /*
     * Cette methode remplace l'api banque.
     */
    public function validationCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($id);
        $request = $this->container->get('request_stack')->getCurrentRequest();

        if (!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas');

        $commande->setValider(1);
        $commande->setReference($this->container->get('setNewReference')->reference()); //Service
        $em->flush();
        $this->quantitesUpdate();

        $session = $request->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');

        //Ici le mail de validation
        sendMails($commande);

        $this->get('session')->getFlashBag()->add('success','Votre commande est validé avec succès');
        return $this->redirect($this->generateUrl('factures'));
    }

    public function quantitesUpdate(){
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $panier = $session->get('panier');
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        for ($i = 0; $i < count($produits); ++$i){
            $quantite = $produits[$i]->getQuantite() - $panier[$produits[$i]->getId()];
            $produits[$i]->setQuantite($quantite);
            $em->persist($produits[$i]);
        }

        $em->flush();

        return 0;
    }

    public function sendMails($commande){

        $message = \Swift_Message::newInstance()
            ->setSubject('Commande Validation')
            ->setFrom(array('ark@miva.tg' => "Miva"))
            ->setTo($commande->getUtilisateur()->getEmailCanonical())
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig',array(
                'utilisateur' => $commande->getUtilisateur())));

        $this->get('mailer')->send($message);

        $message = \Swift_Message::newInstance()
            ->setSubject('New Request')
            ->setFrom($commande->getUtilisateur()->getEmailCanonical())
            ->setTo(array('ark@miva.tg'))
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig',array(
                'commande' => $commande)));

        $this->get('mailer')->send($message);

    }
}
