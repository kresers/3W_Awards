<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * info3WAwards
 *
 * @ORM\Table(name="info3_w_awards")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\info3WAwardsRepository")
 */
class Info3WAwards
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluationRepartition", type="string", length=255)
     */
    private $evaluationRepartition;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;


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
     * Set title
     *
     * @param string $title
     *
     * @return info3WAwards
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set evaluationRepartition
     *
     * @param string $evaluationRepartition
     *
     * @return info3WAwards
     */
    public function setEvaluationRepartition($evaluationRepartition)
    {
        $this->evaluationRepartition = $evaluationRepartition;

        return $this;
    }

    /**
     * Get evaluationRepartition
     *
     * @return string
     */
    public function getEvaluationRepartition()
    {
        return $this->evaluationRepartition;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return info3WAwards
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
}

