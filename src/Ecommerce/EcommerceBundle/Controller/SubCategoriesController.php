<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubCategoriesController extends Controller
{
    public function sousMenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $subCategories = $em->getRepository('EcommerceBundle:SubCategories')->findAll();
        
        return $this->render('EcommerceBundle:Default:subCategories/modulesUsed/sousMenu.html.twig', array('subCategories' => $subCategories));
    }
}
