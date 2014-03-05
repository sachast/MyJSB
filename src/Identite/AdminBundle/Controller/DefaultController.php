<?php

namespace Identite\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Identite\ProfilBundle\Entity\Personne;
use Identite\ProfilBundle\Entity\PersonneRepository;
use Identite\ProfilBundle\Form\PersonneTypeAdmin;
use Identite\ProfilBundle\Entity\IdentifiantsWeb;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	
        return $this->render('IdentiteAdminBundle:Default:index.html.twig',array(
        	'prenom' => $this->getUser()->getPersonne()->getPrenom(),
        	'utilisateursEnAttente' => $this->getDoctrine()->getRepository('IdentiteProfilBundle:Personne')->utilisateursEnAttente(),
        ));
    }
    
    public function listeUtilisateursNonValideAction(){
    	return $this->render('IdentiteAdminBundle:Default:liste.html.twig',array(
    	    	'utilisateursEnAttente' => $this->getDoctrine()->getRepository('IdentiteProfilBundle:Personne')->utilisateursEnAttente(),
    	));
    }
    
    public function validerAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('IdentiteProfilBundle:Personne')->find($id);
    
    	if (!$entity || $entity->getValideLe()!=null) {
    		throw $this->createNotFoundException('Unable to find Personne entity, or the user is activated.');
    	}
    
    	$editForm = $this->createEditForm($entity);
    
    	return $this->render('IdentiteAdminBundle:Default:validate.html.twig', array(
    			'entity'      => $entity,
    			'edit_form'   => $editForm->createView(),
    			'user' => $entity->getPrenom(),
    	));
    }
    
    private function createEditForm(Personne $entity)
    {
    	$form = $this->createForm(new PersonneTypeAdmin(), $entity, array(
    			'action' => $this->generateUrl('confirmer_un_utilisateur', array('id' => $entity->getId())),
    			'method' => 'PUT',
    	));
    
    	$form->add('submit', 'submit', array('label' => 'Valider'));
    
    	return $form;
    }
    
    public function updateAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('IdentiteProfilBundle:Personne')->find($id);
    
    	if (!$entity || $entity->getValideLe()!=null) {
    		throw $this->createNotFoundException('Unable to find IdentifiantsWeb entity.');
    	}
    
    	$editForm = $this->createEditForm($entity);
    	$editForm->handleRequest($request);
    
    	if ($editForm->isValid()) {
    		$em->flush();
    
    		return $this->redirect($this->generateUrl('validation_utilisateurs'));
    	}
    
    	return $this->render('IdentiteProfilBundle:IdentifiantsWeb:edit.html.twig', array(
    			'entity'      => $entity,
    			'edit_form'   => $editForm->createView()
    	));
    }
}
