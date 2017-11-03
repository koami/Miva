<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentairesController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commentaires = $em->getRepository('EcommerceBundle:Commentaires')->findAll();
        
        return $this->render('EcommerceBundle:Default:commentaires/modulesUsed/show.html.twig', array('commentaires' => $commentaires));
    }
    
    
}
