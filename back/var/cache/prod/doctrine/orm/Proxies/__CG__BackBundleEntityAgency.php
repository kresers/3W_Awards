<?php

namespace Proxies\__CG__\BackBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agency extends \BackBundle\Entity\Agency implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'id', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'name', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'country', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'categories', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'logo', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'adress', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'adress2', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'postalCode', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'city', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'phoneNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'fax', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'presentation', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'expertise', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'notes', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'creationDate', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'staffNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'revenue', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'website', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'tvaNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'numberDuns', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'customer'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'id', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'name', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'country', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'categories', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'logo', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'adress', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'adress2', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'postalCode', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'city', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'phoneNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'fax', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'presentation', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'expertise', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'notes', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'creationDate', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'staffNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'revenue', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'website', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'tvaNumber', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'numberDuns', '' . "\0" . 'BackBundle\\Entity\\Agency' . "\0" . 'customer'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Agency $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories($categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress($adress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress2($adress2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress2', [$adress2]);

        return parent::setAdress2($adress2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress2', []);

        return parent::getAdress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postalCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postalCode]);

        return parent::setPostalCode($postalCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phoneNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', [$fax]);

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', []);

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation($presentation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', [$presentation]);

        return parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', []);

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpertise($expertise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpertise', [$expertise]);

        return parent::setExpertise($expertise);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpertise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpertise', []);

        return parent::getExpertise();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStaffNumber($staffNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStaffNumber', [$staffNumber]);

        return parent::setStaffNumber($staffNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getStaffNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStaffNumber', []);

        return parent::getStaffNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevenue($revenue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevenue', [$revenue]);

        return parent::setRevenue($revenue);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevenue', []);

        return parent::getRevenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', [$website]);

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', []);

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTvaNumber($tvaNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTvaNumber', [$tvaNumber]);

        return parent::setTvaNumber($tvaNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getTvaNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTvaNumber', []);

        return parent::getTvaNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberDuns($numberDuns)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberDuns', [$numberDuns]);

        return parent::setNumberDuns($numberDuns);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberDuns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberDuns', []);

        return parent::getNumberDuns();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomer(\BackBundle\Entity\Customer $customer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomer', [$customer]);

        return parent::addCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomer(\BackBundle\Entity\Customer $customer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomer', [$customer]);

        return parent::removeCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

}
