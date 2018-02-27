<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colors
 *
 * @ORM\Table(name="colors")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\ColorsRepository")
 */
class Colors
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
     * @var string
     *
     * @ORM\Column(name="hexa", type="string", length=255)
     */
    private $hexa;


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
     * @return Colors
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
     * Set hexa
     *
     * @param string $hexa
     *
     * @return Colors
     */
    public function setHexa($hexa)
    {
        $this->hexa = $hexa;

        return $this;
    }

    /**
     * Get hexa
     *
     * @return string
     */
    public function getHexa()
    {
        return $this->hexa;
    }
}
