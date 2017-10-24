<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\Rayon;
use Ecommerce\EcommerceBundle\Form\RayonType;

/**
 * Rayon controller.
 *
 */
class RayonAdminController extends Controller{
    /**
     * Lists all Rayon entities.
     *
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Rayon')->findAll();

        return $this->render('EcommerceBundle:Administration:Rayon/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Rayon entity.
     *
     */
    public function createAction(Request $request){
        $entity = new Rayon();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminRayon_show', array('id' => $entity->getId())));
        }

        return $this->render('EcommerceBundle:Administration:Rayon/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Rayon entity.
    *
    * @param Rayon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Rayon $entity){
        $form = $this->createForm(new RayonType(), $entity, array(
            'action' => $this->generateUrl('adminRayon_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rayon entity.
     *
     */
    public function newAction(){
        $entity = new Rayon();
        $form   = $this->createCreateForm($entity);

        return $this->render('EcommerceBundle:Administration:Rayon/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rayon entity.
     *
     */
    public function showAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Rayon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rayon entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:Rayon/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Rayon entity.
     *
     */
    public function editAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Rayon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rayon entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:Rayon/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rayon entity.
    *
    * @param Rayon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rayon $entity){
        $form = $this->createForm(new RayonType(), $entity, array(
            'action' => $this->generateUrl('adminRayon_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Rayon entity.
     *
     */
    public function updateAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Rayon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rayon entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminRayon_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Administration:Rayon/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rayon entity.
     *
     */
    public function deleteAction(Request $request, $id){
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:Rayon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rayon entity.');
            }
            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminRayon'));
    }

    /**
     * Creates a form to delete a Rayon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminRayon_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
