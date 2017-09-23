<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\SubCategories;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ProduitsController extends Controller
{
    public function produitsAction(SubCategories $subCategorie = null)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        if ($subCategorie != null){
            $query = $em->createQuery("SELECT p FROM Ecommerce\EcommerceBundle\Entity\Produits p where p.quantite > 0 AND p.subCategorie = :subCategorie")
                ->setParameters(['subCategorie' => $subCategorie,]);

            $findProduits = $query->getResult();
        }else {
            $query = $em->createQuery('SELECT p FROM Ecommerce\EcommerceBundle\Entity\Produits p where p.quantite > 0')
                ->setMaxResults(6);
            $produits = $query->getResult();
        }

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $rayons = $em->getRepository('EcommerceBundle:Rayon')->findAll();

        if($subCategorie == null) {
            $partenaires = $em->getRepository('EcommerceBundle:Partenaires')->findAll();
            return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',
                array(
                    'produits' => $produits,
                    'panier' => $panier,
                    'rayons' => $rayons,
                    'partenaires' => $partenaires));
        }
        else{
            $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),9);
            $query = $em->createQuery("SELECT cat FROM Ecommerce\EcommerceBundle\Entity\Categories cat where :subCategorie in ('cat.subCategories')")
                ->setParameters(['subCategorie' => $subCategorie,]);
            $cat = $query->getResult();

            return $this->render('EcommerceBundle:Default:produits/layout/articles.html.twig',
                array(
                    'cat' => $cat,
                    'produits' => $produits,
                    'panier' => $panier,
                    'rayons' => $rayons));
        }
    }

    public function plusAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('SELECT p FROM Ecommerce\EcommerceBundle\Entity\Produits p where p.quantite > 0');
        $findProduits = $query->getResult();

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),9);
        $rayons = $em->getRepository('EcommerceBundle:Rayon')->findAll();
        $query = $em->createQuery('SELECT p FROM Ecommerce\EcommerceBundle\Entity\Categories p ')
            ->setMaxResults(1);
        $cat = $query->getResult();
        //$cat = $em->getRepository('EcommerceBundle:Categories')->getOneOrNullResult();

        return $this->render('EcommerceBundle:Default:produits/layout/articles.html.twig',
            array(
                'cat' => $cat,
                'produits' => $produits,
                'panier' => $panier,
                'rayons' => $rayons));

    }

    public function articlesAction(Categories $categorie)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        $findSubCategories = $em->getRepository('EcommerceBundle:SubCategories')
            ->byCategorie($categorie);
        $query = $em->createQuery('SELECT p FROM Ecommerce\EcommerceBundle\Entity\Produits p where p.subCategorie in (:subCategories)')
            ->setParameters(['subCategories' => $findSubCategories,]);
        $findProduits = $query->getResult();

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),9);
        $rayons = $em->getRepository('EcommerceBundle:Rayon')->findAll();
        $cat = $em->getRepository('EcommerceBundle:Categories')->find($categorie);

        return $this->render('EcommerceBundle:Default:produits/layout/articles.html.twig',
            array(
                'cat' => $cat,
                'produits' => $produits,
                'panier' => $panier,
                'rayons' => $rayons));
    }

    public function presentationAction($id)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',
                                array(
                                        'produit' => $produit,
                                        'panier' => $panier));
    }
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function rechercheTraitementAction()
    {

        $request = $this->getRequest();
        if ($request->isXmlHttpRequest()) {
            $chaine = $request->get('chaine');
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($chaine);

        }

        else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }


        $response = new JsonResponse();
        if ($produits) {
            $prods = array();
            foreach ($produits as $produit) {
                $prods[] = array("id" => $produit->getId(),
                    "nom" => $produit->getNom());
            }

            $response->setData(array('produits' => $prods));
        }
        return $response;
    }
}