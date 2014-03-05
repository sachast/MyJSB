<?php

namespace Identite\ProfilBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Identite\ProfilBundle\Entity\IdentifiantsWeb;
use Identite\ProfilBundle\Form\IdentifiantsWebType;

/**
 * IdentifiantsWeb controller.
 *
 */
class IdentifiantsWebController extends Controller
{

    /**
     * Lists all IdentifiantsWeb entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IdentiteProfilBundle:IdentifiantsWeb')->findAll();

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new IdentifiantsWeb entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new IdentifiantsWeb();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inscription_show', array('id' => $entity->getId())));
        }

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a IdentifiantsWeb entity.
    *
    * @param IdentifiantsWeb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(IdentifiantsWeb $entity)
    {
        $form = $this->createForm(new IdentifiantsWebType(), $entity, array(
            'action' => $this->generateUrl('inscription_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new IdentifiantsWeb entity.
     *
     */
    public function newAction()
    {
        $entity = new IdentifiantsWeb();
        $form   = $this->createCreateForm($entity);

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a IdentifiantsWeb entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteProfilBundle:IdentifiantsWeb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IdentifiantsWeb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'user' => $entity->getPersonne()->getNom() . ' '. $entity->getPersonne()->getPrenom(),
			));
    }

    /**
     * Displays a form to edit an existing IdentifiantsWeb entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteProfilBundle:IdentifiantsWeb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IdentifiantsWeb entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'user' => $entity->getLogin(),
        ));
    }

    /**
    * Creates a form to edit a IdentifiantsWeb entity.
    *
    * @param IdentifiantsWeb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(IdentifiantsWeb $entity)
    {
        $form = $this->createForm(new IdentifiantsWebType(), $entity, array(
            'action' => $this->generateUrl('inscription_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing IdentifiantsWeb entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteProfilBundle:IdentifiantsWeb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IdentifiantsWeb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('inscription_edit', array('id' => $id)));
        }

        return $this->render('IdentiteProfilBundle:IdentifiantsWeb:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a IdentifiantsWeb entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IdentiteProfilBundle:IdentifiantsWeb')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find IdentifiantsWeb entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inscription'));
    }

    /**
     * Creates a form to delete a IdentifiantsWeb entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscription_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
