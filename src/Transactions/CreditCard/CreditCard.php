<?php

namespace PagSeguro\Transactions\CreditCard;

use PagSeguro\Contracts\Common\Address;
use PagSeguro\Contracts\Transactions\CreditCard\Holder;
use PagSeguro\Contracts\Transactions\CreditCard\Installment;
use PagSeguro\Contracts\Transactions\CreditCard\CreditCard as CreditCardContract;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class CreditCard implements CreditCardContract
{
    /**
     * @var string
     */
    private $token = '';
    
    /**
     * @var \PagSeguro\Transactions\CreditCard\Holder
     */
    private $holder = '';
    
    /**
     * @var \PagSeguro\Transactions\CreditCard\Installment
     */
    private $installment = '';

    /**
     * @var \PagSeguro\Contracts\Common\Address
     */
    private $address = '';
    
    /**
     * Make new instance of this class
     * 
     * @param string $token
     * @param \PagSeguro\Transactions\CreditCard\Holder $holder
     * @param \PagSeguro\Transactions\CreditCard\Installment $installment
     * @param \PagSeguro\Contracts\Common\Address $address
     * @return void
     */
    public function __construct(string $token = null, Holder $holder = null, Installment $installment = null, Address $address = null)
    {
        ($token)       ? $this->setToken($token)             : false;
        ($holder)      ? $this->setHolder($holder)           : false;
        ($installment) ? $this->setInstallment($installment) : false;
        ($address)     ? $this->setAddress($address)         : false;
    }

    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    
    /**
     * Set token
     * 
     * @param string $token
     * @return $this
     */
    public function setToken(string $token)
    {
        $this->token = $token;
        
        return $this;
    }
    
    /**
     * Get holder
     * 
     * @return string | \PagSeguro\Transactions\CreditCard\Holder
     */
    public function getHolder()
    {
        return $this->holder;
    }
    
    /**
     * Set holder
     * 
     * @param \PagSeguro\Transactions\CreditCard\Holder $holder
     * @return $this
     */
    public function setHolder(Holder $holder)
    {
        $this->holder = $holder;
        
        return $this;
    }
    
    /**
     * Get installment
     * 
     * @return string | \PagSeguro\Transactions\CreditCard\Installment
     */
    public function getInstallment()
    {
        return $this->installment;
    }
    
    /**
     * Set installment
     * 
     * @param \PagSeguro\Transactions\CreditCard\Installment $installment
     * @return $this
     */
    public function setInstallment(Installment $installment)
    {
        $this->installment = $installment;
        
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
}