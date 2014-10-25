<?php

namespace Polcode\Bundle\RecruitmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AM
 */
class AM
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
     * @ORM\OneToMany(targetEntity="Polcode\Bundle\RecruitmentBundle\Entity\Employee", mappedBy="am")
     */
    protected $employes;
    
    function getUniqueName()
    {
        return sprintf('%s - %s', $this->firstName, $this->lastName);
    }

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
     * @return AM
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
     * @return AM
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
     * @return AM
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
     * Constructor
     */
    public function __construct()
    {
        $this->employes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add employes
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\Employee $employes
     * @return AM
     */
    public function addEmploye(\Polcode\Bundle\RecruitmentBundle\Entity\Employee $employes)
    {
        $this->employes[] = $employes;

        return $this;
    }

    /**
     * Remove employes
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\Employee $employes
     */
    public function removeEmploye(\Polcode\Bundle\RecruitmentBundle\Entity\Employee $employes)
    {
        $this->employes->removeElement($employes);
    }

    /**
     * Get employes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployes()
    {
        return $this->employes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;


    /**
     * Add projects
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\Project $projects
     * @return AM
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
}
