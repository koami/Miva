<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;

class CommandesAdminController extends Controller
{
    public function commandesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('c');
        $qb->from('EcommerceBundle:Commandes','c');
        $qb->where('c.valider = :valider');
        $qb->setParameter('valider', 1);
        $commandes = $qb->getQuery()->getResult();
        //$commandes = $em->getRepository('EcommerceBundle:Commandes')->findAll();

        return $this->render('EcommerceBundle:Administration:Commandes/layout/index.html.twig', array('commandes' => $commandes));
    }

    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('count(c.id)');
        $qb->from('EcommerceBundle:Commandes','c');
        $qb->where('c.valider = :valider');
        $qb->andWhere('c.livrer = :livrer');
        $qb->setParameter('valider', 1);
        $qb->setParameter('livrer', 0);
        $commandes = $qb->getQuery()->getSingleScalarResult();

        return $this->render('EcommerceBundle:Administration:Commandes/modulesUsed/commande.html.twig', array('commandes' => $commandes));
    }

    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceBundle:Commandes')->find($id);

        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('adminCommande'));
        }

        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');

        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');

        return $response;
    }

    public function livrerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($id);

        $commande->setLivrer(1);
        $em->persist($commande);
        $em->flush();

        $commandes = $em->getRepository('EcommerceBundle:Commandes')->findAll();
        return $this->render('EcommerceBundle:Administration:Commandes/layout/index.html.twig', array('commandes' => $commandes));
    }
}
