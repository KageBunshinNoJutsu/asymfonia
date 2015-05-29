<?php

namespace ASY\AsymfoniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ASYAsymfoniaBundle:Default:index.html.twig', array('name' => $name));
    }
}
