<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\SubCategories;
use Ecommerce\EcommerceBundle\Entity\Media;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
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

        /*var_dump($subCategorie);
        die();*/

        if ($subCategorie != null)
            $findProduits = $em->getRepository('EcommerceBundle:Produits')
                ->bySubCategorie($subCategorie);
        else {
            $query = $em->createQuery('SELECT p FROM Ecommerce\EcommerceBundle\Entity\Produits p where p.quantite > 0');
            $findProduits = $query->getResult();
        }

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),9);
        $rayons = $em->getRepository('EcommerceBundle:Rayon')->findAll();
        $partenaires = $em->getRepository('EcommerceBundle:Partenaires')->findAll();

        if($subCategorie == null) {
            return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',
                array(
                    'produits' => $produits,
                    'panier' => $panier,
                    'rayons' => $rayons,
                    'partenaires' => $partenaires));
        }
        else{
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

    /*public function produitsAction()
    {
        //$session = $this->getRequest()->getSession();
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
        $partenaires = $em->getRepository('EcommerceBundle:Partenaires')->findAll();
        //$product = $repository->findOneByName('Keyboard'); // Pour les images

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',
                            array(
                                    'produits' => $produits,
                                    'panier' => $panier,
                                    'rayons' => $rayons,
                                    'partenaires' => $partenaires));
    }*/

    public function presentationAction($id)
    {
        //$session = $this->getRequest()->getSession();
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
    
    //recherche ajax
    public function rechercheTraitementAction() 
    {
        
        $request = $this->getRequest();
        if ($request->isXmlHttpRequest()) {
            $chaine = $request->get('chaine');
            $subCategorie = $request->get('subCategorie'); 
            //var_dump($subCategorie);
            $em = $this->getDoctrine()->getManager();
            if ($subCategorie==null) {
                $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($chaine);
            }
            else{
                $produits = $em->getRepository('EcommerceBundle:Produits')
                ->rechercheCategorie($chaine, $subCategorie);
            }
            
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
        else{
            $response->setData(array('message' => 'Aucun résultat'));
        }
       
        return $response;
    }

    /*public function rechercheTraitementAction() 
    {
        $form = $this->createForm(new RechercheType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }*/

    /*public function findMediaAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $media = new Media();
        $query = $em->createQuery('SELECT i FROM Ecommerce\EcommerceBundle\Entity\Media i where i.name = $name');
        $media = $query->getResult();
        return $media;
    }*/

    /*public function getCommentsForSingleProduct(Product $product)
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.product = :productId')
            ->setParameter('productId', $product->getId());
        $query = $qb->getQuery();
        return $query->execute();
    }*/

    /*public function ajouterPanierAction($id)
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
    }*/
}