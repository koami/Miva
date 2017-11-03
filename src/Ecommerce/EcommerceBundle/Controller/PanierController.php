<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class PanierController extends Controller
{
    public function menuAction()
    {
        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('EcommerceBundle:Default:panier/modulesUsed/panier.html.twig', array('articles' => $articles));
    }

    public function supprimerAction($id)
    {
        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('panier'));
    }

    public function ajouterAction($id)
    {
        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);

        return $this->redirect($this->generateUrl('panier'));
    }

    public function ajouterPanierAction($id)
    {
        //$session = $this->getRequest()->getSession();
        
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);

        $response = new JsonResponse();
        $response->setData(array(
            'articles' => count($session->get('panier')),
            'message' => 'Quantité modifié avec succès'
        ));

        //return $this->render(controller('EcommerceBundle:Panier:menu'));

        //return $this->redirect($request->headers->get('referer'));
        return $response;
    }

    /* // The one for the js/JQuery and Ajax
    public function ajouterPanierAction(Request $request)
    {
        $response = new JsonResponse();
        $requestData = $request->request->all();
        $productid = $requestData['product'];

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('EcommerceBundle:Produits')->find($productid);

        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($productid, $panier)) {
            if ($request->query->get('qte') != null) $panier[$productid] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$productid] = $request->query->get('qte');
            else
                $panier[$productid] = 1;

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $response->setData(array(
            'success' => true,
            'message' => 'Quantité modifié avec succès',
            'amount'  => $panier[ $productid ]
        ));

        $session->set('panier',$panier);

        return $response;
    }*/

    /*public function addQuantityAction( Request $request ) {
        $response = new JsonResponse();
        $requestData = $request->request->all();
        $productid     = $requestData['product'];
        $quantity = $requestData['quantity'];

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('MpShopBundle:Product')->find($productid);
        $qtyAvailable = $product->getStock();

        $session = $this->getRequest()->getSession();
        $cart = $session->get('cart', array());
        if ( $qtyAvailable > $cart[ $productid ] ) {
        $cart[ $productid ] = $cart[ $productid ] + 1;
        $qtyAvailable = $qtyAvailable - 1;
        $response->setData(array(
            'success' => true,
            'message' => 'Qunatity increased',
            'amount'  => $cart[ $productid ]
        ));
        $session->set('cart', $cart);
        } else {
            $response->setData(array('success'=>false,'message'=>'Out of stock'));
        }
        return $response;
    }*/

    public function panierAction()
    {
        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier', array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig', array('produits' => $produits,
            'panier' => $session->get('panier')));
    }

    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($id);

        if ($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect ($this->generateUrl ('livraison'));

        $em->remove($entity);
        $em->flush();

        return $this->redirect ($this->generateUrl ('livraison'));
    }

    public function livraisonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType($em), $entity);
        $request = $this->container->get('request_stack')->getCurrentRequest();

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('livraison'));
            }
        }

        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig', array(
            'utilisateur' => $utilisateur,
            'form' => $form->createView()));
    }

    public function setLivraisonOnSession()
    {
        //$session = $this->getRequest()->getSession();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');

        if ($request->request->get('livraison') != null)
        {
            $adresse['livraison'] = $request->request->get('livraison');
        } else {
            return $this->redirect($this->generateUrl('validation'));
        }
        /*var_dump($adresse);
        die();*/

        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('validation'));
    }

    public function validationAction()
    {
        if ($this->get('request')->getMethod() == 'POST')
            $this->setLivraisonOnSession();

        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('EcommerceBundle:Commandes:prepareCommande');
       /* var_dump($prepareCommande);
        die();*/
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($prepareCommande->getContent());
        /*var_dump($commande);
        die();*/

        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig', array('commande' => $commande));
    }
}
