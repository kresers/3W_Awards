<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contest
 *
 * @ORM\Table(name="contest")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\ContestRepository")
 */
class Contest
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
     * @ORM\Column(name="winner_id", type="integer")
     */
    private $winnerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contest_date", type="datetime")
     */
    private $contestDate;

    /**
     * @var int
     *
     * @ORM\Column(name="contestant", type="string", length=255)
     */
    private $contestant;

    /**
     * @var int
     *
     * @ORM\Column(name="member_rating", type="integer")
     */
    private $memberRating;

    /**
     * @var int
     *
     * @ORM\Column(name="jury_rating", type="integer")
     */
    private $juryRating;


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
     * @return Contest
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
     * Set winnerId
     *
     * @param integer $winnerId
     *
     * @return Contest
     */
    public function setWinnerId($winnerId)
    {
        $this->winnerId = $winnerId;

        return $this;
    }

    /**
     * Get winnerId
     *
     * @return int
     */
    public function getWinnerId()
    {
        return $this->winnerId;
    }

    /**
     * Set contestDate
     *
     * @param \DateTime $contestDate
     *
     * @return Contest
     */
    public function setContestDate($contestDate)
    {
        $this->contestDate = $contestDate;

        return $this;
    }

    /**
     * Get contestDate
     *
     * @return \DateTime
     */
    public function getContestDate()
    {
        return $this->contestDate;
    }

    /**
     * Set contestant
     *
     * @param integer $contestant
     *
     * @return Contest
     */
    public function setContestant($contestant)
    {
        $this->contestant = $contestant;

        return $this;
    }

    /**
     * Get contestant
     *
     * @return int
     */
    public function getContestant()
    {
        return $this->contestant;
    }

    /**
     * Set memberRating
     *
     * @param integer $memberRating
     *
     * @return Contest
     */
    public function setMemberRating($memberRating)
    {
        $this->memberRating = $memberRating;

        return $this;
    }

    /**
     * Get memberRating
     *
     * @return int
     */
    public function getMemberRating()
    {
        return $this->memberRating;
    }

    /**
     * Set juryRating
     *
     * @param integer $juryRating
     *
     * @return Contest
     */
    public function setJuryRating($juryRating)
    {
        $this->juryRating = $juryRating;

        return $this;
    }

    /**
     * Get juryRating
     *
     * @return int
     */
    public function getJuryRating()
    {
        return $this->juryRating;
    }
}

