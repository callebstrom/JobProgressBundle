<?php

namespace callebstrom\JPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#############################################################
# Controller class used to fetch progress data via Doctrine #
#############################################################

class JobProgressController extends Controller
{

    private $retJobs = array();

    ##########################################
    #      Action for /jpb/progress/user     #
    # Gets all running jobs for current user #
    ##########################################
    public function getProgressUserAction(Request $request)
    {           
        // Get current user
        //$username = $this->getUser();
        $username = "test_user";

        // Get Doctrine entity manager
        $em = $this->getDoctrine()->getEntityManager();

        // Get all running jobs for user
        $jobs = $em->getRepository('JPBundle:Job')->findAll();

        foreach($jobs as $job) {
            if($job->getUsername() == $username && $job->getProgress() != 1) {
                array_push($this->retJobs, $job->toArr());
            }
        }

        return new Response(json_encode($this->retJobs));
    }

    #######################################
    #     Action for /jpb/progress/all    #
    # Gets all running jobs for all users #
    #######################################
    public function getProgressAllAction(Request $request)
    {
        // Get Doctrine entity manager
        $em = $this->getDoctrine()->getEntityManager();

        // Get all running jobs for user
        $jobs = $em->getRepository('JPBundle:Job')->findAll();

        foreach($jobs as $job) {
            if($job->getProgress() != 1) {
                array_push($this->retJobs, $job->toArr());
            }
        }

        return new Response(json_encode($this->retJobs));
    }

}
