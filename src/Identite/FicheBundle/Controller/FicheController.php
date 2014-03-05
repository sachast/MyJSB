<?php

namespace Identite\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Identite\FicheBundle\Entity\Fiche;
use Identite\FicheBundle\Form\FicheType;

/**
 * Fiche controller.
 *
 */
class FicheController extends Controller
{

    /**
     * Lists all Fiche entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IdentiteFicheBundle:Fiche')->findAll();

        return $this->render('IdentiteFicheBundle:Fiche:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fiche entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fiche();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_show', array('id' => $entity->getId())));
        }

        return $this->render('IdentiteFicheBundle:Fiche:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Fiche entity.
    *
    * @param Fiche $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Fiche $entity)
    {
        $form = $this->createForm(new FicheType(), $entity, array(
            'action' => $this->generateUrl('fiche_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fiche entity.
     *
     */
    public function newAction()
    {
        $entity = new Fiche();
        $form   = $this->createCreateForm($entity);

        return $this->render('IdentiteFicheBundle:Fiche:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fiche entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteFicheBundle:Fiche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fiche entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IdentiteFicheBundle:Fiche:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Fiche entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteFicheBundle:Fiche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fiche entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IdentiteFicheBundle:Fiche:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fiche entity.
    *
    * @param Fiche $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fiche $entity)
    {
        $form = $this->createForm(new FicheType(), $entity, array(
            'action' => $this->generateUrl('fiche_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fiche entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IdentiteFicheBundle:Fiche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fiche entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_edit', array('id' => $id)));
        }

        return $this->render('IdentiteFicheBundle:Fiche:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fiche entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IdentiteFicheBundle:Fiche')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fiche entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fiche'));
    }

    /**
     * Creates a form to delete a Fiche entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
    

    public function rechercheAction(Request $recherche)
    {
        

        
        $recherche_Fiche = $recherche->get('recherche');
        
        
        return $this->render('IdentiteFicheBundle:Default:index.html.twig', array(
        		'resultats' => $this->getDoctrine()->getRepository('IdentiteFicheBundle:Fiche')->rechercherFiche('4','ageMin'),
        ));

    }
    
    
                                                 
  /*
    public function rechercheAction(Request $recherche)
    {
        $recherche_Fiche = $recherche->get('recherche');
        var_dump($recherche_Fiche);
        //$em = $this->get('doctrine.orm.entity_manager');
        //$reponse = $bdd->prepare('SELECT * FROM Fiche WHERE titre = 'coin' OR description = 'coin'');
        //$reponse->execute(array(resultat, resultat));
        
        //$affichage = PDO::fetch_assoc(resultat);
        
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('Identite:Fiche');
        
        return $this->render('IdentiteFicheBundle:Default:index.html.twig', array('name' => $recherche_Fiche));
    }
   */
}
