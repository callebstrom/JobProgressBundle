<?php

namespace callebstrom\JPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JPBundle:Default:index.html.twig', array('name' => $name));
    }
}
