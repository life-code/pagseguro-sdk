<?php

namespace PagSeguro\Customer;

use PagSeguro\Contracts\Address;
use PagSeguro\Contracts\Phone;
use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.4
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Customer
{
    use Validator;
    
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var PagSeguro\Contracts\Phone
     */
    private $phone;

    /**
     * @var PagSeguro\Contracts\Address
     */
    private $address;
    
    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    
    /**
     * Set email
     * 
     * @param string $email
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setEmail(string $email)
    {
        if (!$this->validateEmail($email)) {
            throw new PagseguroException("The [$email] isn't a valid email.");
        }
        
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * Get ip
     * 
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    
    /**
     * Set ip
     * 
     * @param string $ip
     * @return $this
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;
        
        return $this;
    }
    
    /**
     * Get hash
     * 
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash;
    }
    
    /**
     * Set hash
     * 
     * @param string $hash
     * @return $this
     */
    public function setHash(string $hash)
    {
        $this->hash = $hash;
        
        return $this;
    }
    
    /**
     * Get name
     * 
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    
    /**
     * Set name
     * 
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        if (! preg_match('/[A-Z][a-z]* [A-Z][a-z]*/', $name)) {
            throw new PagseguroException("The [$name] isn't a valid name. Required first and last name");
        }
        
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get phone
     * 
     * @return string | \PagSeguro\Contracts\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Set phone
     * 
     * @param \PagSeguro\Contracts\Phone $phone
     * @return $this
     */
    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
        
        return $this;
    }
    
    /**
     * Get address
     * 
     * @return string | \PagSeguro\Contracts\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
}