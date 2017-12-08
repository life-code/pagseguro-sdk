<?php

namespace PagSeguro\Transactions\CreditCard;

use PagSeguro\Contracts\Common\Phone;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Contracts\Transactions\CreditCard\Holder as HolderContract;
use PagSeguro\Exceptions\PagseguroException;
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
class Holder implements HolderContract
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
     * @var PagSeguro\Contracts\Common\Phone
     */
    private $phone = '';

    /**
     * @var PagSeguro\Contracts\Common\Documents
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
     * Get birth date
     * 
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->birth_date;
    }
    
    /**
     * Set birth date
     * 
     * @param string $birth_date
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setBirthDate(string $birth_date)
    {
        if (!$this->validateDate($birth_date, 'pt-br')) {
            throw new PagseguroException("The [$birth_date] isn't a valid birth date.");
        }
        
        $this->birth_date = $birth_date;
        
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
            'birthDate' => $this->getBirthDate(),
            'phone'     => $this->getPhone()->toArray(),
        ];
        
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