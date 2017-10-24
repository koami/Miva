<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DescriptionsController extends Controller{
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();
        $descriptions = $em->getRepository('EcommerceBundle:Descriptions')->findAll();
        
        return $this->render('EcommerceBundle:Default:descriptions/modulesUsed/show.html.twig', array('descriptions' => $descriptions));
    }
    
    
}
