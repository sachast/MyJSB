<?php

namespace Identite\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function loginAction()
    {
		    	
		$request = $this->getRequest();
		$session = $request->getSession();
		// get the login error if there is one
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		
		return $this->render('IdentiteProfilBundle:Default:index.html.twig', array(
		// last username entered by the user
		'last_username' => $session->get(SecurityContext::LAST_USERNAME),
		'error'	=> $error,
		));
    }
    
    public function indexAction($name){
    	return $this->render('IdentiteProfilBundle:Default:name.html.twig',array('name'=>$name));
    }
    
    public function checkAction()
    {
    	return $this->indexAction();
    }
    
    public function adminAction()
    {
    	return $this->indexAction();
    }
}
