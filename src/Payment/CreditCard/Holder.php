<?php

namespace PagSeguro\Payment\CreditCard;

use PagSeguro\Contracts\Phone;
use PagSeguro\Contracts\Documents;
use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Holder
{
    use Validator;
    
    /**
     * @var string
     */
    private $name = '';
    
    /**
     * @var string
     */
    private $birth_date = '';

    /**
     * @var PagSeguro\Contracts\Phone
     */
    private $phone = '';

    /**
     * @var PagSeguro\Contracts\Documents
     */
    private $documents = '';
    
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
        if (! preg_match('/[A-Za-z]* [A-Za-z]*/', $name)) {
            throw new PagseguroException("The [$name] isn't a valid name. Required first and last name");
        }
        
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get birth_date
     * 
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->birth_date;
    }
    
    /**
     * Set birth_date
     * 
     * @param string $birth_date
     * @return $this
     */
    public function setBirthDate(string $birth_date)
    {
        $this->birth_date = $birth_date;
        
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
     * Get documents
     * 
     * @return string | \PagSeguro\Contracts\Documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    
    /**
     * Set documents
     * 
     * @param \PagSeguro\Contracts\Documents $documents
     * @return $this
     */
    public function setDocuments(Documents $documents)
    {
        $this->documents = $documents;
        
        return $this;
    }
}