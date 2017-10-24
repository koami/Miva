<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartenairesController extends Controller{
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();
        $partenaires = $em->getRepository('EcommerceBundle:Partenaires')->findAll();
        
        return $this->render('EcommerceBundle:Default:paretenaires/modulesUsed/show.html.twig', array('partenaires' => $partenaires));
    }
    
    
}
