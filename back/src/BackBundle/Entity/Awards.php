<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * awards
 *
 * @ORM\Table(name="awards")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\AwardsRepository")
 */
class Awards
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
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Project")
     * @ORM\JoinColumn(nullable=false)
     */

    private $project;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\CategoryAwards", cascade={"persist"})
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
     * @return awards
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
     * Constructor
     */
    public function __construct()
    {
        $this->categoryAwards = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set project
     *
     * @param \BackBundle\Entity\Project $project
     *
     * @return Awards
     */
    public function setProject(\BackBundle\Entity\Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \BackBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add categoryAward
     *
     * @param \BackBundle\Entity\CategoryAwards $categoryAward
     *
     * @return Awards
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
