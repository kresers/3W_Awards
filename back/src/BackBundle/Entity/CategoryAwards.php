<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAwards
 *
 * @ORM\Table(name="category_awards")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CategoryAwardsRepository")
 */
class CategoryAwards
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
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\VoteCriteria", cascade={"persist"})
     */
    private $voteCriteria;


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
     * Set label
     *
     * @param string $label
     *
     * @return CategoryAwards
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->getLabel();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voteCriteria = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add voteCriterium
     *
     * @param \BackBundle\Entity\VoteCriteria $voteCriterium
     *
     * @return CategoryAwards
     */
    public function addVoteCriterium(\BackBundle\Entity\VoteCriteria $voteCriterium)
    {
        $this->voteCriteria[] = $voteCriterium;

        return $this;
    }

    /**
     * Remove voteCriterium
     *
     * @param \BackBundle\Entity\VoteCriteria $voteCriterium
     */
    public function removeVoteCriterium(\BackBundle\Entity\VoteCriteria $voteCriterium)
    {
        $this->voteCriteria->removeElement($voteCriterium);
    }

    /**
     * Get voteCriteria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVoteCriteria()
    {
        return $this->voteCriteria;
    }
}
