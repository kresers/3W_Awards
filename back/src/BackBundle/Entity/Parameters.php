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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="parameter_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
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


}
