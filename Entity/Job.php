<?php

namespace callebstrom\JPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *  
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="progress", type="decimal")
     */
    private $progress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="isAborted", type="boolean")
     */
    private $isAborted;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Job
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set progress
     *
     * @param string $progress
     * @return Job
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string 
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Job
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Job
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return Job
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }


    /**
     * Set username
     *
     * @param string $username
     * @return Job
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Set isAborted
     *
     * @param string $username
     * @return Job
     */
    public function setIsAborted($isAborted)
    {
        $this->isAborted = $isAborted;

        return $this;
    }

    /**
     * Get isAborted
     *
     * @return string 
     */
    public function getIsAborted()
    {
        return $this->isAborted;
    }

    public function toArr() {
        $retArr = array(
            "id" => $this->getId(),
            "type" => $this->getType(),
            "progress" => $this->getProgress(),
            "startdate" => $this->getStartdate(),
            "enddate" => $this->getEnddate(),
            "result" => $this->getResult(),
            "username" => $this->getUsername()
        );

        return $retArr;
    }
}
