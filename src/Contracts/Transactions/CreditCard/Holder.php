<?php

namespace PagSeguro\Contracts\Transactions\CreditCard;

use PagSeguro\Contracts\Common\Phone;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Holder
{
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
     * Get birth date
     * 
     * @return string
     */
    public function getBirthDate() : string;
    
    /**
     * Set birth date
     * 
     * @param string $birth_date
     * @return $this
     */
    public function setBirthDate(string $birth_date);
    
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