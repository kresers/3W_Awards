<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * parameters
 *
 * @ORM\Table(name="parameters")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\ParametersRepository")
 * @Vich\Uploadable
 */
class Parameters
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="applicationNale", type="string", length=255)
     */
    private $applicationNale;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="parameter_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    // ...

    public function setImageFile(File $image = null)
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

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="adress2", type="string", length=255)
     */
    private $adress2;

    /**
     * @var int
     *
     * @ORM\Column(name="phoneNumber", type="integer")
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRequest", type="string", length=255)
     */
    private $emailRequest;
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
     * Set applicationNale
     *
     * @param string $applicationNale
     *
     * @return parameters
     */
    public function setApplicationNale($applicationNale)
    {
        $this->applicationNale = $applicationNale;

        return $this;
    }
    /**
     * Get applicationNale
     *
     * @return string
     */
    public function getApplicationNale()
    {
        return $this->applicationNale;
    }
    /**
     * Set image
     *
     * @param string $image
     *
     * @return Parameters
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    public function getImageFile()
    {
        return $this->imageFile;
    }


    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return parameters
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }
    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }
    /**
     * Set adress2
     *
     * @param string $adress2
     *
     * @return parameters
     */
    public function setAdress2($adress2)
    {
        $this->adress2 = $adress2;

        return $this;
    }
    /**
     * Get adress2
     *
     * @return string
     */
    public function getAdress2()
    {
        return $this->adress2;
    }
    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return parameters
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return parameters
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }
    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set emailRequest
     *
     * @param string $emailRequest
     *
     * @return parameters
     */
    public function setEmailRequest($emailRequest)
    {
        $this->emailRequest = $emailRequest;

        return $this;
    }
    /**
     * Get emailRequest
     *
     * @return string
     */
    public function getEmailRequest()
    {
        return $this->emailRequest;
    }


    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Parameters
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get ponderationNote
     *
     * @return int
     */
    public function getPonderationNote()
    {
        return $this->ponderationNote;
    }

    /**
     * Set ponderationNoteMembers
     *
     * @param integer $ponderationNoteMembers
     *
     * @return parameters
     */
    public function setPonderationNoteMembers($ponderationNoteMembers)
    {
        $this->ponderationNoteMembers = $ponderationNoteMembers;

        return $this;
    }

    /**
     * Get ponderationNoteMembers
     *
     * @return int
     */
    public function getPonderationNoteMembers()
    {
        return $this->ponderationNoteMembers;
    }

    /**
     * Set numberOfScreens
     *
     * @param integer $numberOfScreens
     *
     * @return parameters
     */
    public function setNumberOfScreens($numberOfScreens)
    {
        $this->numberOfScreens = $numberOfScreens;

        return $this;
    }

    /**
     * Get numberOfScreens
     *
     * @return int
     */
    public function getNumberOfScreens()
    {
        return $this->numberOfScreens;
    }

    /**
     * Set sizeMaxUpload
     *
     * @param integer $sizeMaxUpload
     *
     * @return parameters
     */
    public function setSizeMaxUpload($sizeMaxUpload)
    {
        $this->sizeMaxUpload = $sizeMaxUpload;

        return $this;
    }

    /**
     * Get sizeMaxUpload
     *
     * @return int
     */
    public function getSizeMaxUpload()
    {
        return $this->sizeMaxUpload;
    }

    /**
     * Set numberMaxTags
     *
     * @param integer $numberMaxTags
     *
     * @return parameters
     */
    public function setNumberMaxTags($numberMaxTags)
    {
        $this->numberMaxTags = $numberMaxTags;

        return $this;
    }

    /**
     * Get numberMaxTags
     *
     * @return int
     */
    public function getNumberMaxTags()
    {
        return $this->numberMaxTags;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return parameters
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
     * Set category
     *
     * @param string $category
     *
     * @return parameters
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set numberOfStaff
     *
     * @param integer $numberOfStaff
     *
     * @return parameters
     */
    public function setNumberOfStaff($numberOfStaff)
    {
        $this->numberOfStaff = $numberOfStaff;

        return $this;
    }

    /**
     * Get numberOfStaff
     *
     * @return int
     */
    public function getNumberOfStaff()
    {
        return $this->numberOfStaff;
    }

    /**
     * Set revenue
     *
     * @param integer $revenue
     *
     * @return parameters
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return int
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set websiteType
     *
     * @param string $websiteType
     *
     * @return parameters
     */
    public function setWebsiteType($websiteType)
    {
        $this->websiteType = $websiteType;

        return $this;
    }

    /**
     * Get websiteType
     *
     * @return string
     */
    public function getWebsiteType()
    {
        return $this->websiteType;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return parameters
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set graphicalStyle
     *
     * @param string $graphicalStyle
     *
     * @return parameters
     */
    public function setGraphicalStyle($graphicalStyle)
    {
        $this->graphicalStyle = $graphicalStyle;

        return $this;
    }

    /**
     * Get graphicalStyle
     *
     * @return string
     */
    public function getGraphicalStyle()
    {
        return $this->graphicalStyle;
    }

    /**
     * Set behavior
     *
     * @param string $behavior
     *
     * @return parameters
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;

        return $this;
    }

    /**
     * Get behavior
     *
     * @return string
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Set countries
     *
     * @param string $countries
     *
     * @return parameters
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries
     *
     * @return string
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return parameters
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set mainColors
     *
     * @param string $mainColors
     *
     * @return parameters
     */
    public function setMainColors($mainColors)
    {
        $this->mainColors = $mainColors;

        return $this;
    }

    /**
     * Get mainColors
     *
     * @return string
     */
    public function getMainColors()
    {
        return $this->mainColors;
    }

    /**
     * Set cms
     *
     * @param string $cms
     *
     * @return parameters
     */
    public function setCms($cms)
    {
        $this->cms = $cms;

        return $this;
    }

    /**
     * Get cms
     *
     * @return string
     */
    public function getCms()
    {
        return $this->cms;
    }

    /**
     * Set frameworks
     *
     * @param string $frameworks
     *
     * @return parameters
     */
    public function setFrameworks($frameworks)
    {
        $this->frameworks = $frameworks;

        return $this;
    }

    /**
     * Get frameworks
     *
     * @return string
     */
    public function getFrameworks()
    {
        return $this->frameworks;
    }

    /**
     * Set devLanguage
     *
     * @param string $devLanguage
     *
     * @return parameters
     */
    public function setDevLanguage($devLanguage)
    {
        $this->devLanguage = $devLanguage;

        return $this;
    }

    /**
     * Get devLanguage
     *
     * @return string
     */
    public function getDevLanguage()
    {
        return $this->devLanguage;
    }

    /**
     * Set techFront
     *
     * @param string $techFront
     *
     * @return parameters
     */
    public function setTechFront($techFront)
    {
        $this->techFront = $techFront;

        return $this;
    }

    /**
     * Get techFront
     *
     * @return string
     */
    public function getTechFront()
    {
        return $this->techFront;
    }

    /**
     * Set missions
     *
     * @param string $missions
     *
     * @return parameters
     */
    public function setMissions($missions)
    {
        $this->missions = $missions;

        return $this;
    }

    /**
     * Get missions
     *
     * @return string
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Set evaluations
     *
     * @param string $evaluations
     *
     * @return parameters
     */
    public function setEvaluations($evaluations)
    {
        $this->evaluations = $evaluations;

        return $this;
    }

    /**
     * Get evaluations
     *
     * @return string
     */
    public function getEvaluations()
    {
        return $this->evaluations;
    }

    /**
     * Set professions
     *
     * @param string $professions
     *
     * @return parameters
     */
    public function setProfessions($professions)
    {
        $this->professions = $professions;

        return $this;
    }

    /**
     * Get professions
     *
     * @return string
     */
    public function getProfessions()
    {
        return $this->professions;
    }

    /**
     * Set socialNetworks
     *
     * @param string $socialNetworks
     *
     * @return parameters
     */
    public function setSocialNetworks($socialNetworks)
    {
        $this->socialNetworks = $socialNetworks;

        return $this;
    }

    /**
     * Get socialNetworks
     *
     * @return string
     */
    public function getSocialNetworks()
    {
        return $this->socialNetworks;
    }

    /**
     * Set blogCategories
     *
     * @param string $blogCategories
     *
     * @return parameters
     */
    public function setBlogCategories($blogCategories)
    {
        $this->blogCategories = $blogCategories;

        return $this;
    }

    /**
     * Get blogCategories
     *
     * @return string
     */
    public function getBlogCategories()
    {
        return $this->blogCategories;
    }
}
