<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteCriteria
 *
 * @ORM\Table(name="vote_criteria")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\VoteCriteriaRepository")
 */
class VoteCriteria
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\CategoryAwards", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $categoryAwards;


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
     * Set name
     *
     * @param string $name
     *
     * @return VoteCriteria
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
     * Set color
     *
     * @param string $color
     *
     * @return VoteCriteria
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoryAwards = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categoryAward
     *
     * @param \BackBundle\Entity\CategoryAwards $categoryAward
     *
     * @return VoteCriteria
     */
    public function addCategoryAward(\BackBundle\Entity\CategoryAwards $categoryAward)
    {
        $this->categoryAwards[] = $categoryAward;

        return $this;
    }

    /**
     * Remove categoryAward
     *
     * @param \BackBundle\Entity\CategoryAwards $categoryAward
     */
    public function removeCategoryAward(\BackBundle\Entity\CategoryAwards $categoryAward)
    {
        $this->categoryAwards->removeElement($categoryAward);
    }

    /**
     * Get categoryAwards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryAwards()
    {
        return $this->categoryAwards;
    }
}
