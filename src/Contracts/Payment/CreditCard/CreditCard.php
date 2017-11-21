<?php

namespace PagSeguro\Contracts\Payment\CreditCard;

use PagSeguro\Contracts\Common\Address;
use PagSeguro\Contracts\Payment\CreditCard\Holder;
use PagSeguro\Contracts\Payment\CreditCard\Installment;
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
interface CreditCard
{
    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string;
    
    /**
     * Set token
     * 
     * @param string $token
     * @return $this
     */
    public function setToken(string $token);
    
    /**
     * Get holder
     * 
     * @return string | \PagSeguro\Payment\CreditCard\Holder
     */
    public function getHolder();
    
    /**
     * Set holder
     * 
     * @param \PagSeguro\Payment\CreditCard\Holder $holder
     * @return $this
     */
    public function setHolder(Holder $holder);
    
    /**
     * Get installment
     * 
     * @return string | \PagSeguro\Payment\CreditCard\Installment
     */
    public function getInstallment();
    
    /**
     * Set installment
     * 
     * @param \PagSeguro\Payment\CreditCard\Installment $installment
     * @return $this
     */
    public function setInstallment(Installment $installment);
    
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
}