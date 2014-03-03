<?php

namespace Identite\FicheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IdentiteFicheBundle:Default:index.html.twig', array('name' => $name));
    }
}
