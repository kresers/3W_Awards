<?php

namespace UserBundle\Entity;


use BackBundle\Entity\Category;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 * @Vich\Uploadable()
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
 * @Serializer\ExclusionPolicy("all")
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
     * @Serializer\Expose()
     * @ORM\Column(name="gender", type="string", length=255, nullable=true))
     */
    protected $gender;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="main_skin", type="string", length=255, nullable=true))
     */
    protected $mainSkin;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="interest_center", type="string", length=255, nullable=true))
     */
    protected $interestCenter;


    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    protected $lastName;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    protected $facebook;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    protected $twitter;


    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="linked_in", type="string", length=255, nullable=true)
     */
    protected $linkedIn;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="instagram", type="string", length=255, nullable=true)
     */
    protected $instagram;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="behance", type="string", length=255, nullable=true)
     */
    protected $behance;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="dribble", type="string", length=255, nullable=true)
     */
    protected $dribble;


    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    protected $firstName;

    /**
     * @Serializer\Expose()
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $country;

    /**
     * @var
     * @Serializer\Expose()
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    protected $image;

    /**
     * @Vich\UploadableField(mapping="user_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * @var \DateTime
     * @Serializer\Expose()
     * @ORM\Column(name="birthDate", type="datetime", nullable=true)
     */
    protected $birthDate;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="job", type="string", length=255,nullable=true)
     */
    protected $job;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="memberOfJury", type="string", length=255,nullable=true)
     */
    protected $memberOfJury;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="presentation", type="string", length=255,nullable=true)
     */
    protected $presentation;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="keyword", type="string", length=255,nullable=true)
     */
    protected $keyword;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="website", type="string", length=255,nullable=true)
     */
    protected $website;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="social", type="string", length=255,nullable=true)
     */
    protected $social;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="autNotification", type="boolean",nullable=true)
     */
    protected $autoNotification;

    /**
     * @var ArrayCollection
     * @Serializer\Expose()
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Category",cascade={"persist"})
     */
    protected $category;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="optIn", type="string", length=255,nullable=true)
     */
    protected $optIn;

    /**@Serializer\Expose()
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Project", cascade={"persist"})
     */
    protected $project;

    /**
     * @var string
     * @Serializer\Expose()
     * @ORM\Column(name="url_website", type="string", length=255,nullable=true)
     */
     protected $urlWebsite;


    public function __construct()
    {
        $this->category = new ArrayCollection();
        parent::__construct();
    }

    public function addCategory(Category $category)
    {
        $this->category[] = $category;
        return $this;
    }

    public function removeCategory(Category $category)
    {
        $this->category->removeElement($category);
    }

    public function getCategory()
    {
        return $this->category;
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

    public function setImageFile( $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

    /**
     * Set mainSkin
     *
     * @param string $mainSkin
     *
     * @return User
     */
    public function setMainSkin($mainSkin)
    {
        $this->mainSkin = $mainSkin;

        return $this;
    }

    /**
     * Get mainSkin
     *
     * @return string
     */
    public function getMainSkin()
    {
        return $this->mainSkin;
    }

    /**
     * Set urlWebsite
     *
     * @param string $urlWebsite
     *
     * @return User
     */
    public function setUrlWebsite($urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;

        return $this;
    }

    /**
     * Get urlWebsite
     *
     * @return string
     */
    public function getUrlWebsite()
    {
        return $this->urlWebsite;
    }

    /**
     * Set interestCenter
     *
     * @param string $interestCenter
     *
     * @return User
     */
    public function setInterestCenter($interestCenter)
    {
        $this->interestCenter = $interestCenter;

        return $this;
    }

    /**
     * Get interestCenter
     *
     * @return string
     */
    public function getInterestCenter()
    {
        return $this->interestCenter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedIn
     *
     * @param string $linkedIn
     *
     * @return User
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;

        return $this;
    }

    /**
     * Get linkedIn
     *
     * @return string
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return User
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set behance
     *
     * @param string $behance
     *
     * @return User
     */
    public function setBehance($behance)
    {
        $this->behance = $behance;

        return $this;
    }

    /**
     * Get behance
     *
     * @return string
     */
    public function getBehance()
    {
        return $this->behance;
    }

    /**
     * Set dribble
     *
     * @param string $dribble
     *
     * @return User
     */
    public function setDribble($dribble)
    {
        $this->dribble = $dribble;

        return $this;
    }

    /**
     * Get dribble
     *
     * @return string
     */
    public function getDribble()
    {
        return $this->dribble;
    }
}
