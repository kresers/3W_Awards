<?php

namespace UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 *
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "app_client_show",
 *          parameters = { "id" = "expr(object.getId())" },
 *          absolute=true
 *      )
 * )
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true))
     */
    protected $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    protected $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime", nullable=true)
     */
    protected $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255,nullable=true)
     */
    protected $job;

    /**
     * @var string
     *
     * @ORM\Column(name="memberOfJury", type="string", length=255,nullable=true)
     */
    protected $memberOfJury;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255,nullable=true)
     */
    protected $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255,nullable=true)
     */
    protected $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255,nullable=true)
     */
    protected $website;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="string", length=255,nullable=true)
     */
    protected $social;

    /**
     * @var string
     *
     * @ORM\Column(name="autNotification", type="boolean",nullable=true)
     */
    protected $autoNotification;

    /**
     * @var string
     *
     * @ORM\Column(name="optIn", type="string", length=255,nullable=true)
     */
    protected $optIn;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Project", cascade={"persist"})
     */
    protected $project;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
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
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set memberOfJury
     *
     * @param string $memberOfJury
     *
     * @return User
     */
    public function setMemberOfJury($memberOfJury)
    {
        $this->memberOfJury = $memberOfJury;

        return $this;
    }

    /**
     * Get memberOfJury
     *
     * @return string
     */
    public function getMemberOfJury()
    {
        return $this->memberOfJury;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return User
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return User
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return User
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set social
     *
     * @param string $social
     *
     * @return User
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return string
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set autoNotification
     *
     * @param boolean $autoNotification
     *
     * @return User
     */
    public function setAutoNotification($autoNotification)
    {
        $this->autoNotification = $autoNotification;

        return $this;
    }

    /**
     * Get autoNotification
     *
     * @return boolean
     */
    public function getAutoNotification()
    {
        return $this->autoNotification;
    }

    /**
     * Set optIn
     *
     * @param string $optIn
     *
     * @return User
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;

        return $this;
    }

    /**
     * Get optIn
     *
     * @return string
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * Add project
     *
     * @param \BackBundle\Entity\Project $project
     *
     * @return User
     */
    public function addProject(\BackBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \BackBundle\Entity\Project $project
     */
    public function removeProject(\BackBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProject()
    {
        return $this->project;
    }
}
