<?php

namespace Identite\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IdentiteProfilBundle:Default:index.html.twig', array('name' => $name));
    }
}
