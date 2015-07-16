<?php

namespace callebstrom\JPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class JobProgressController extends Controller
{
    public function progressAction(Request $request)
    {
        return $this->render('JPBundle:Default:index.html.twig');
    }

    public function progressAllAction(Request $request)
    {
        return $this->render('JPBundle:Default:index.html.twig');
    }

}
