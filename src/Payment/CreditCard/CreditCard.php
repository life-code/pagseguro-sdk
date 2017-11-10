<?php

namespace PagSeguro\Payment\CreditCard;

use PagSeguro\Exceptions\PagseguroException;

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
class CreditCard
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
}