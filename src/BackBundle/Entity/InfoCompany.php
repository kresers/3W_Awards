<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoCompany
 *
 * @ORM\Table(name="info_company")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\InfoCompanyRepository")
 */
class InfoCompany
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
     * @var int
     *
     * @ORM\Column(name="workforce", type="integer")
     */
    private $workforce;

    /**
     * @var float
     *
     * @ORM\Column(name="revenue", type="float")
     */
    private $revenue;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_status", type="string", length=255)
     */
    private $legalStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetimetz")
     */
    private $creationDate;


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
     * @return InfoCompany
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
     * Set workforce
     *
     * @param integer $workforce
     *
     * @return InfoCompany
     */
    public function setWorkforce($workforce)
    {
        $this->workforce = $workforce;

        return $this;
    }

    /**
     * Get workforce
     *
     * @return int
     */
    public function getWorkforce()
    {
        return $this->workforce;
    }

    /**
     * Set revenue
     *
     * @param float $revenue
     *
     * @return InfoCompany
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set legalStatus
     *
     * @param string $legalStatus
     *
     * @return InfoCompany
     */
    public function setLegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;

        return $this;
    }

    /**
     * Get legalStatus
     *
     * @return string
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return InfoCompany
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
}

