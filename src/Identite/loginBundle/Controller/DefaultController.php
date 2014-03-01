<?php

namespace Identite\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IdentiteloginBundle:Default:index.html.twig', array());
    }
}
