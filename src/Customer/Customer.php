<?php

namespace PagSeguro\Customer;

use PagSeguro\Contracts\Customer\Customer as CustomerContract;
use PagSeguro\Contracts\Common\Address;
use PagSeguro\Contracts\Common\Phone;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Exceptions\PagSeguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Customer implements CustomerContract
{
    use Validator;
    
    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var string
     */
    private $hash = '';

    /**
     * @var PagSeguro\Contracts\Common\Phone
     */
    private $phone = '';

    /**
     * @var PagSeguro\Contracts\Common\Address
     */
    private $address = '';
    
    /**
     * @var PagSeguro\Contracts\Common\Documents
     */
    private $documents = '';
    
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setEmail(string $email)
    {
        if (!$this->validateEmail($email)) {
            throw new PagSeguroException($email, 2201);
        }
        
        $this->email = $email;
        
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setName(string $name)
    {
        if (! preg_match('/[A-Za-z]* [A-Za-z]*/', $name)) {
            throw new PagSeguroException($name, 2202);
        }
        
        $this->name = $name;
        
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setIp(string $ip)
    {
        if (!$this->validateIp($ip)) {
            throw new PagSeguroException($ip, 2203);
        }
        
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
     * Get phone
     * 
     * @return string | \PagSeguro\Contracts\Common\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Set phone
     * 
     * @param \PagSeguro\Contracts\Common\Phone $phone
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
     * @return string | \PagSeguro\Contracts\Common\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Common\Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * Get documents
     * 
     * @return string | \PagSeguro\Contracts\Common\Documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    
    /**
     * Set documents
     * 
     * @param \PagSeguro\Contracts\Common\Documents $documents
     * @return $this
     */
    public function setDocuments(Documents $documents)
    {
        $this->documents = $documents;
        
        return $this;
    }
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray(bool $xml_format = false) : array
    {
        $response = [
            'name'      => $this->getName(),
            'email'     => $this->getEmail(),
            'hash'      => $this->getHash(),
            'phone'     => $this->getPhone()->toArray(),
        ];
        
        if ($ip = $this->getIp()) {
            $response['ip'] = $ip;
        }
        
        if ($address = $this->getAddress()) {
            $response['address'] = $address->toArray();
        }
        
        if ($xml_format) {
            $response['documents'] = [
                'document' => $this->getDocuments()->toArray(),
            ];
        } else {
            $response['documents'] = [
                $this->getDocuments()->toArray(),
            ];
        }
        
        return $response;
    }
}