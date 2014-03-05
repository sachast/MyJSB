<?php

namespace Identite\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IdentiteAdminBundle:Default:index.html.twig');
    }
}
