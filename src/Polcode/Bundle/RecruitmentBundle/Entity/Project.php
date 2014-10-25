<?php

namespace Polcode\Bundle\RecruitmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $endAt;

    /**
     * @var boolean
     */
    private $isInternal;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
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
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Project
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set isInternal
     *
     * @param boolean $isInternal
     * @return Project
     */
    public function setIsInternal($isInternal)
    {
        $this->isInternal = $isInternal;

        return $this;
    }

    /**
     * Get isInternal
     *
     * @return boolean 
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }
    /**
     * @var \Polcode\Bundle\RecruitmentBundle\Entity\AM
     */
    private $am;


    /**
     * Set am
     *
     * @param \Polcode\Bundle\RecruitmentBundle\Entity\AM $am
     * @return Project
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
}
