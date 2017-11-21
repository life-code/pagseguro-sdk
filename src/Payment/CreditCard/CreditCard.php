<?php

namespace PagSeguro\Payment\CreditCard;

use PagSeguro\Contracts\Address;
use PagSeguro\Contracts\Payment\CreditCard\Holder;
use PagSeguro\Contracts\Payment\CreditCard\Installment;
use PagSeguro\Contracts\Payment\CreditCard\CreditCard as CreditCardContract;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.96
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
     * @var \PagSeguro\Payment\CreditCard\Holder
     */ 
    private $holder = '';
    
    /**
     * @var \PagSeguro\Payment\CreditCard\Installment
     */ 
    private $installment = '';

    /**
     * @var PagSeguro\Contracts\Address
     */
    private $address = '';
    
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
     * @return string | \PagSeguro\Payment\CreditCard\Holder
     */
    public function getHolder()
    {
        return $this->holder;
    }
    
    /**
     * Set holder
     * 
     * @param \PagSeguro\Payment\CreditCard\Holder $holder
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
     * @return string | \PagSeguro\Payment\CreditCard\Installment
     */
    public function getInstallment()
    {
        return $this->installment;
    }
    
    /**
     * Set installment
     * 
     * @param \PagSeguro\Payment\CreditCard\Installment $installment
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