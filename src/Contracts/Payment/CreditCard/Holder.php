<?php

namespace PagSeguro\Contracts\Payment\CreditCard;

use PagSeguro\Contracts\Phone;
use PagSeguro\Contracts\Documents;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.97
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
     * @return string | \PagSeguro\Contracts\Phone
     */
    public function getPhone();
    
    /**
     * Set phone
     * 
     * @param \PagSeguro\Contracts\Phone $phone
     * @return $this
     */
    public function setPhone(Phone $phone);
    
    /**
     * Get documents
     * 
     * @return string | \PagSeguro\Contracts\Documents
     */
    public function getDocuments();
    
    /**
     * Set documents
     * 
     * @param \PagSeguro\Contracts\Documents $documents
     * @return $this
     */
    public function setDocuments(Documents $documents);
}