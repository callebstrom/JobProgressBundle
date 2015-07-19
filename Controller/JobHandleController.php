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

	public function addProgress($progress) {
		
		// Get Doctrine entity manager
		$em = $this->getDoctrine()->getEntityManager();

		// Fetch the job entity
		$job = $em->getRepository('callebstromJPBundle:Job')->find($this->jobId);

		// Get current progress of entity
		$currentProgress = $job->getProgress();

		// If total progress after addition is above 100%, do nothing
		if($progress + $currentProgress >= 1) {

		} else {
			// Else add the progress
			$job->setProgress($progress + $currentProgress);
		}

		// Store the changes
		$em->flush();

	}

	public function finishJob() {

		// Get Doctrine entity manager
		$em = $this->getDoctrine()->getEntityManager();

		// Fetch the job entity
		$job = $em->getRepository('JPBundle:Job')->find($this->jobId);

		// Track object
		$em->persist($job);

		// Set progress to 100%
		$job->setProgress(1);

		// Store the Job entity in the DB
		$em->flush();

	}

	// Func that inits new job with custom type 
	public function initJob($type) {

		$em = $this->getDoctrine()->getEntityManager();

		// Init new job
		$job = new Job();

		// Track object
		$em->persist($job);

		// Set progress to 0
		$job->setProgress(0.0);
		
		// Set Job type based on arg
		$job->setType("");
		
		// Set startdate to current datetime using MySQL DATETIME format
		$job->setStartDate(date_create(date("Y-m-d H:i:s")));

		// Store the Job entity in the DB
		$em->flush();

		// Set the job ID if Doctrine successfully stored the object
		$this->jobId = $job->getId();
	}
}
