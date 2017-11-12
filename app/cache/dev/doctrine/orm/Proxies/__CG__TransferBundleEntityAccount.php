<?php

namespace Proxies\__CG__\TransferBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Account extends \TransferBundle\Entity\Account implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'id', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'balance', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'accounttype', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'user', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'transfer_origin_account', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'transfer_destiny_account', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'slug');
        }

        return array('__isInitialized__', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'id', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'balance', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'accounttype', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'user', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'transfer_origin_account', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'transfer_destiny_account', '' . "\0" . 'TransferBundle\\Entity\\Account' . "\0" . 'slug');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Account $proxy) {
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
    public function setAccountType($accounttype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountType', array($accounttype));

        return parent::setAccountType($accounttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountType', array());

        return parent::getAccountType();
    }

    /**
     * {@inheritDoc}
     */
    public function getTransferOriginAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransferOriginAccount', array());

        return parent::getTransferOriginAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransferOriginAccount(\TransferBundle\Entity\Account $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransferOriginAccount', array($account));

        return parent::addTransferOriginAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransferOriginAccount(\TransferBundle\Entity\Account $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransferOriginAccount', array($account));

        return parent::removeTransferOriginAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function addTransferDestinyAccount(\TransferBundle\Entity\Account $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransferDestinyAccount', array($account));

        return parent::addTransferDestinyAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransferDestinyAccount(\TransferBundle\Entity\Account $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransferDestinyAccount', array($account));

        return parent::removeTransferDestinyAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransferDestinyAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransferDestinyAccount', array());

        return parent::getTransferDestinyAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function getBalance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBalance', array());

        return parent::getBalance();
    }

    /**
     * {@inheritDoc}
     */
    public function setBalance($balance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBalance', array($balance));

        return parent::setBalance($balance);
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
