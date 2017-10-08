<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Contact;
use Utilisateurs\UtilisateursBundle\Form\ContactType;

class ContactController extends Controller
{
    public function contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Contact();
        $form = $this->createForm(new ContactType($em), $entity);
        $request = $this->container->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($entity->getSujet())
                    ->setFrom($entity->getEmail())
                    ->setTo('contact@miva.tg')
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($this->renderView('UtilisateursBundle:Default:layout/mailSent.html.twig', array('contact' => $entity)));

                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('success', 'Merci, Nous avons recu votre mail.');
                //return $this->render('UtilisateursBundle:Default:layout/mailSent.html.twig');
                return $this->redirect($this->generateUrl('sendMail'));
            }
        }

        return $this->render('UtilisateursBundle:Default:layout/contact.html.twig', array(
            'form' => $form->createView()));
    }

    public function sendMailAction()
    {
        return $this->render('UtilisateursBundle:Default:layout/mailSent.html.twig', array('contact' => null));
    }
}