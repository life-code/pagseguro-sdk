<?php

namespace PagSeguro\Contracts;

use PagSeguro\Customer\Address;
use PagSeguro\Customer\Phone;
use PagSeguro\Exceptions\PagseguroException;

interface Customer
{
    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail() : string;
    
    /**
     * Set email
     * 
     * @param string $email
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setEmail(string $email);
    
    /**
     * Get IP
     * 
     * @return string
     */
    public function getIp() : string;
    
    /**
     * Set ip
     * 
     * @param string $ip
     * @return $this
     */
    public function setIp(string $ip);
    
    /**
     * Get Hash
     * 
     * @return string
     */
    public function getHash() : string;
    
    /**
     * Set hash
     * 
     * @param string $hash
     * @return $this
     */
    public function setHash(string $hash);
    
    /**
     * Get name
     * 
     * @return string
     */
    public function getName() : string;
    
    /**
     * Set name
     * 
     * @param string $name
     * @return $this
     */
    public function setName(string $name);
    
    /**
     * Get phone
     * 
     * @return string | \PagSeguro\Customer\Phone
     */
    public function getPhone();
    
    /**
     * Set phone
     * 
     * @param \PagSeguro\Customer\Phone $phone
     * @return $this
     */
    public function setPhone(Phone $phone);
    
    /**
     * Get address
     * 
     * @return string | \PagSeguro\Customer\Address
     */
    public function getAddress();
    
    /**
     * Set address
     * 
     * @param \PagSeguro\Customer\Address $address
     * @return $this
     */
    public function setAddress(Address $address);
}
