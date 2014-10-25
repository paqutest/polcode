<?php

namespace Polcode\Bundle\RecruitmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Employee
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $firstName;
    

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $lastName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "The email is not a valid",
     *     checkMX = true
     * )
     */
    private $email;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Polcode\Bundle\RecruitmentBundle\Entity\AM", inversedBy="employes")
     * @ORM\JoinColumn(name="am", referencedColumnName="id", onDelete="cascade")
     * @Assert\NotBlank()
     */
    private $am; 

    


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
     * Set firstName
     *
     * @param string $firstName
     * @return Employee
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set am
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\AM $am
     * @return Employee
     */
    public function setAm(\Polcode\Bundle\RecruitmentBundle\Entity\AM $am = null)
    {
        $this->am = $am;

        return $this;
    }

    /**
     * Get am
     *
     * @return \Polcode\Bundle\RecruitmentBundle\Entity\AM 
     */
    public function getAm()
    {
        return $this->am;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projects
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\Project $projects
     * @return Employee
     */
    public function addProject(\Polcode\Bundle\RecruitmentBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\Project $projects
     */
    public function removeProject(\Polcode\Bundle\RecruitmentBundle\Entity\Project $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
    
    /**
     * @ORM\PrePersist()
     */
    public function prePersist(LifecycleEventArgs $args) {
        $em = $args->getEntityManager();
        $entity = $args->getEntity(); 
        die('nice');
        if ($entity->getProjects() == NULL) { 
            $project = $em->getRepository('PolcodeRecruitmentBundle:Project')->find(1); 
            $entity->setProject($project);
        }
    }
}
