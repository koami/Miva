<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RayonController extends Controller{
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();
        $rayons = $em->getRepository('EcommerceBundle:Rayon')->findAll();
        
        return $this->render('EcommerceBundle:Default:rayon/modulesUsed/menu.html.twig', array('rayons' => $rayons));
    }
    
    
}
