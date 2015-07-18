<?php

namespace callebstrom\JPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\ORM\Mapping as ORM;

use callebstrom\JPBundle\Entity\Job;

#########################################################################
# Controller class used to create jobs and update progress via Doctrine #
#########################################################################

class JobHandleController extends Controller
{

	// Var that stores the job id
	private $jobId = null;

	public function addProgressAction() {

	}

	public function finishJobAction() {

	}

	// Func that inits new job with custom type 
	public function initJobAction($type) {

		// Init new job
		$job = new Job();

		// Set progress to 0
		$job->setProgress = 0;
		
		// Set Job type based on arg
		$job->setType($type);
		
		// Set startdate to current datetime using MySQL DATETIME format
		$job->setStartDate(date("Y-m-d H:i:s"));

		// Store the Job entity in the DB
		$em = $this->getDoctrine()->getEntityManager();
				$em->persist($job);
				$em->flush();

		// Set the job ID if Doctrine successfully stored the object
		$this->jobId = $job->getId();
	}
}
