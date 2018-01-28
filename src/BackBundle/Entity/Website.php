<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="website")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\WebsiteRepository")
 */
class Website
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_sector", type="string", length=255)
     */
    private $activitySector;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=255)
     */
    private $object;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float")
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=255)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=255)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="edited_by", type="string", length=255)
     */
    private $editedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_size", type="string", length=255)
     */
    private $customerSize;

    /**
     * @var string
     *
     * @ORM\Column(name="credits", type="string", length=255)
     */
    private $credits;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime")
     */
    private $publishedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="pictures", type="string", length=255)
     */
    private $pictures;

    /**
     * @var string
     *
     * @ORM\Column(name="styles", type="string", length=255)
     */
    private $styles;

    /**
     * @var string
     *
     * @ORM\Column(name="comportments", type="string", length=255)
     */
    private $comportments;

    /**
     * @var int
     *
     * @ORM\Column(name="accessibility", type="integer")
     */
    private $accessibility;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Website
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Website
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set activitySector
     *
     * @param string $activitySector
     *
     * @return Website
     */
    public function setActivitySector($activitySector)
    {
        $this->activitySector = $activitySector;

        return $this;
    }

    /**
     * Get activitySector
     *
     * @return string
     */
    public function getActivitySector()
    {
        return $this->activitySector;
    }

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Website
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Website
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return Website
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
     * Set target
     *
     * @param string $target
     *
     * @return Website
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
     * Set editedBy
     *
     * @param string $editedBy
     *
     * @return Website
     */
    public function setEditedBy($editedBy)
    {
        $this->editedBy = $editedBy;

        return $this;
    }

    /**
     * Get editedBy
     *
     * @return string
     */
    public function getEditedBy()
    {
        return $this->editedBy;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Website
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerSize
     *
     * @param string $customerSize
     *
     * @return Website
     */
    public function setCustomerSize($customerSize)
    {
        $this->customerSize = $customerSize;

        return $this;
    }

    /**
     * Get customerSize
     *
     * @return string
     */
    public function getCustomerSize()
    {
        return $this->customerSize;
    }

    /**
     * Set credits
     *
     * @param string $credits
     *
     * @return Website
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return string
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return Website
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set pictures
     *
     * @param string $pictures
     *
     * @return Website
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Get pictures
     *
     * @return string
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set styles
     *
     * @param string $styles
     *
     * @return Website
     */
    public function setStyles($styles)
    {
        $this->styles = $styles;

        return $this;
    }

    /**
     * Get styles
     *
     * @return string
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * Set comportments
     *
     * @param string $comportments
     *
     * @return Website
     */
    public function setComportments($comportments)
    {
        $this->comportments = $comportments;

        return $this;
    }

    /**
     * Get comportments
     *
     * @return string
     */
    public function getComportments()
    {
        return $this->comportments;
    }

    /**
     * Set accessibility
     *
     * @param integer $accessibility
     *
     * @return Website
     */
    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;

        return $this;
    }

    /**
     * Get accessibility
     *
     * @return int
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }
}

