<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MicroPost extends \App\Entity\MicroPost implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'text', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'time', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'user', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'likedBy'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'text', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'time', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'user', '' . "\0" . 'App\\Entity\\MicroPost' . "\0" . 'likedBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MicroPost $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public_html API
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
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', []);

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', [$text]);

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTime', []);

        return parent::getTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTime($time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTime', [$time]);

        return parent::setTime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeOnPersist(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeOnPersist', []);

        parent::setTimeOnPersist();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikedBy(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikedBy', []);

        return parent::getLikedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function like(\App\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'like', [$user]);

        return parent::like($user);
    }

}
