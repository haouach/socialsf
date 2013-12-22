<?php

namespace OTN\blogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OTNblogBundle:Default:index.html.twig', array('name' => $name));
    }
}
