<?php

namespace Identite\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Page2Controller extends Controller
{
    public function indexAction()
    {
        return $this->render('IdentiteProfilBundle:Default:index.html.twig', array('name' => 'Pas de paramètre'));
    }
}
