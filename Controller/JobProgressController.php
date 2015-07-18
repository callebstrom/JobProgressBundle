<?php

namespace callebstrom\JPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

#############################################################
# Controller class used to fetch progress data via Doctrine #
#############################################################

class JobProgressController extends Controller
{

	// Action for /progress/user
    public function getProgressAction(Request $request)
    {
        return $this->render('JPBundle:Default:index.html.twig');
    }

    // Action for /progress/all
    public function getProgressAllAction(Request $request)
    {
        return $this->render('JPBundle:Default:index.html.twig');
    }

}
