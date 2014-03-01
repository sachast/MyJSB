<?php

namespace Identite\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{
    public function indexAction($error)
    {
        return $this->render('IdentiteProfilBundle:Default:index.html.twig', array('name' => 'Adresse: " /' . $error . '/ " introuvable'));
    }
}
