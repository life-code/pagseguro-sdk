<?php

namespace PagSeguro\Contracts\Customer;

use PagSeguro\Contracts\Common\Address;
use PagSeguro\Contracts\Common\Phone;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setEmail(string $email);
    
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setName(string $name);
    
    /**
     * Get ip
     * 
     * @return string
     */
    public function getIp() : string;
    
    /**
     * Set ip
     * 
     * @param string $ip
     * @throws \PagSeguro\Exceptions\PagSeguroException
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
     * Get phone
     * 
     * @return string | \PagSeguro\Contracts\Common\Phone
     */
    public function getPhone();
    
    /**
     * Set phone
     * 
     * @param \PagSeguro\Contracts\Common\Phone $phone
     * @return $this
     */
    public function setPhone(Phone $phone);
    
    /**
     * Get address
     * 
     * @return string | \PagSeguro\Contracts\Common\Address
     */
    public function getAddress();
    
    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Common\Address $address
     * @return $this
     */
    public function setAddress(Address $address);
    
    /**
     * Get documents
     * 
     * @return string | \PagSeguro\Contracts\Common\Documents
     */
    public function getDocuments();
    
    /**
     * Set documents
     * 
     * @param \PagSeguro\Contracts\Common\Documents $documents
     * @return $this
     */
    public function setDocuments(Documents $documents);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray(bool $xml_format = false) : array;
}