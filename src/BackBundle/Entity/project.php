<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\projectRepository")
 */
class project
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
     * @ORM\Column(name="projectName", type="string", length=255)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="projectDescription", type="string", length=255)
     */
    private $projectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="websiteType", type="string", length=255)
     */
    private $websiteType;

    /**
     * @var string
     *
     * @ORM\Column(name="activityArea", type="string", length=255)
     */
    private $activityArea;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=255)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="projectFocus", type="string", length=255)
     */
    private $projectFocus;

    /**
     * @var int
     *
     * @ORM\Column(name="projectBudget", type="integer")
     */
    private $projectBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=255)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="createdBy", type="string", length=255)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="clientName", type="string", length=255)
     */
    private $clientName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releaseDate", type="datetime")
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="givingToAgency", type="string", length=255)
     */
    private $givingToAgency;

    /**
     * @var string
     *
     * @ORM\Column(name="keyFunctionnality", type="string", length=255)
     */
    private $keyFunctionnality;

    /**
     * @var string
     *
     * @ORM\Column(name="techFront", type="string", length=255)
     */
    private $techFront;

    /**
     * @var string
     *
     * @ORM\Column(name="devLanguages", type="string", length=255)
     */
    private $devLanguages;

    /**
     * @var string
     *
     * @ORM\Column(name="framework", type="string", length=255)
     */
    private $framework;

    /**
     * @var string
     *
     * @ORM\Column(name="cms", type="string", length=255)
     */
    private $cms;

    /**
     * @var string
     *
     * @ORM\Column(name="technicalChallenges", type="string", length=255)
     */
    private $technicalChallenges;

    /**
     * @var string
     *
     * @ORM\Column(name="focalPoints", type="string", length=255)
     */
    private $focalPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="viewNumber", type="integer")
     */
    private $viewNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="likeNumber", type="integer")
     */
    private $likeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="averageGrade", type="string", length=255)
     */
    private $averageGrade;

    /**
     * @var string
     *
     * @ORM\Column(name="averageJuryGrade", type="string", length=255)
     */
    private $averageJuryGrade;


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
     * Set projectName
     *
     * @param string $projectName
     *
     * @return project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set projectDescription
     *
     * @param string $projectDescription
     *
     * @return project
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    /**
     * Get projectDescription
     *
     * @return string
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return project
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set websiteType
     *
     * @param string $websiteType
     *
     * @return project
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
     * Set activityArea
     *
     * @param string $activityArea
     *
     * @return project
     */
    public function setActivityArea($activityArea)
    {
        $this->activityArea = $activityArea;

        return $this;
    }

    /**
     * Get activityArea
     *
     * @return string
     */
    public function getActivityArea()
    {
        return $this->activityArea;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return project
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
     * Set projectFocus
     *
     * @param string $projectFocus
     *
     * @return project
     */
    public function setProjectFocus($projectFocus)
    {
        $this->projectFocus = $projectFocus;

        return $this;
    }

    /**
     * Get projectFocus
     *
     * @return string
     */
    public function getProjectFocus()
    {
        return $this->projectFocus;
    }

    /**
     * Set projectBudget
     *
     * @param integer $projectBudget
     *
     * @return project
     */
    public function setProjectBudget($projectBudget)
    {
        $this->projectBudget = $projectBudget;

        return $this;
    }

    /**
     * Get projectBudget
     *
     * @return int
     */
    public function getProjectBudget()
    {
        return $this->projectBudget;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return project
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
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return project
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set clientName
     *
     * @param string $clientName
     *
     * @return project
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return project
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set givingToAgency
     *
     * @param string $givingToAgency
     *
     * @return project
     */
    public function setGivingToAgency($givingToAgency)
    {
        $this->givingToAgency = $givingToAgency;

        return $this;
    }

    /**
     * Get givingToAgency
     *
     * @return string
     */
    public function getGivingToAgency()
    {
        return $this->givingToAgency;
    }

    /**
     * Set keyFunctionnality
     *
     * @param string $keyFunctionnality
     *
     * @return project
     */
    public function setKeyFunctionnality($keyFunctionnality)
    {
        $this->keyFunctionnality = $keyFunctionnality;

        return $this;
    }

    /**
     * Get keyFunctionnality
     *
     * @return string
     */
    public function getKeyFunctionnality()
    {
        return $this->keyFunctionnality;
    }

    /**
     * Set techFront
     *
     * @param string $techFront
     *
     * @return project
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
     * Set devLanguages
     *
     * @param string $devLanguages
     *
     * @return project
     */
    public function setDevLanguages($devLanguages)
    {
        $this->devLanguages = $devLanguages;

        return $this;
    }

    /**
     * Get devLanguages
     *
     * @return string
     */
    public function getDevLanguages()
    {
        return $this->devLanguages;
    }

    /**
     * Set framework
     *
     * @param string $framework
     *
     * @return project
     */
    public function setFramework($framework)
    {
        $this->framework = $framework;

        return $this;
    }

    /**
     * Get framework
     *
     * @return string
     */
    public function getFramework()
    {
        return $this->framework;
    }

    /**
     * Set cms
     *
     * @param string $cms
     *
     * @return project
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
     * Set technicalChallenges
     *
     * @param string $technicalChallenges
     *
     * @return project
     */
    public function setTechnicalChallenges($technicalChallenges)
    {
        $this->technicalChallenges = $technicalChallenges;

        return $this;
    }

    /**
     * Get technicalChallenges
     *
     * @return string
     */
    public function getTechnicalChallenges()
    {
        return $this->technicalChallenges;
    }

    /**
     * Set focalPoints
     *
     * @param string $focalPoints
     *
     * @return project
     */
    public function setFocalPoints($focalPoints)
    {
        $this->focalPoints = $focalPoints;

        return $this;
    }

    /**
     * Get focalPoints
     *
     * @return string
     */
    public function getFocalPoints()
    {
        return $this->focalPoints;
    }

    /**
     * Set viewNumber
     *
     * @param integer $viewNumber
     *
     * @return project
     */
    public function setViewNumber($viewNumber)
    {
        $this->viewNumber = $viewNumber;

        return $this;
    }

    /**
     * Get viewNumber
     *
     * @return int
     */
    public function getViewNumber()
    {
        return $this->viewNumber;
    }

    /**
     * Set likeNumber
     *
     * @param integer $likeNumber
     *
     * @return project
     */
    public function setLikeNumber($likeNumber)
    {
        $this->likeNumber = $likeNumber;

        return $this;
    }

    /**
     * Get likeNumber
     *
     * @return int
     */
    public function getLikeNumber()
    {
        return $this->likeNumber;
    }

    /**
     * Set averageGrade
     *
     * @param string $averageGrade
     *
     * @return project
     */
    public function setAverageGrade($averageGrade)
    {
        $this->averageGrade = $averageGrade;

        return $this;
    }

    /**
     * Get averageGrade
     *
     * @return string
     */
    public function getAverageGrade()
    {
        return $this->averageGrade;
    }

    /**
     * Set averageJuryGrade
     *
     * @param string $averageJuryGrade
     *
     * @return project
     */
    public function setAverageJuryGrade($averageJuryGrade)
    {
        $this->averageJuryGrade = $averageJuryGrade;

        return $this;
    }

    /**
     * Get averageJuryGrade
     *
     * @return string
     */
    public function getAverageJuryGrade()
    {
        return $this->averageJuryGrade;
    }
}

