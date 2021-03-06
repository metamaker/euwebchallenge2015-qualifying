<?php

namespace EntityProxy\__CG__\JobScheduler\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Job extends \JobScheduler\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'htmlpage', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'dateFinished', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'dateStarted', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'status', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'images');
        }

        return array('__isInitialized__', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'htmlpage', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'dateFinished', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'dateStarted', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'status', '' . "\0" . 'JobScheduler\\Entity\\Job' . "\0" . 'images');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Job $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtmlPage($htmlpage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtmlPage', array($htmlpage));

        return parent::setHtmlPage($htmlpage);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtmlPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtmlPage', array());

        return parent::getHtmlPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinished($dateFinished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinished', array($dateFinished));

        return parent::setDateFinished($dateFinished);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinished', array());

        return parent::getDateFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateStarted($dateStarted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStarted', array($dateStarted));

        return parent::setDateStarted($dateStarted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStarted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStarted', array());

        return parent::getDateStarted();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\JobScheduler\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', array($image));

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\JobScheduler\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', array($image));

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', array());

        return parent::getImages();
    }

}
