<?php

namespace PagSeguro\Payment;

use PagSeguro\Payment\Type;
use PagSeguro\Contracts\Payment\Method as MethodContract;
use PagSeguro\Contracts\Payment\CreditCard\CreditCard;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.91
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Method implements MethodContract
{
    /**
     * @var string
     */ 
    private $type = '';
    
    /**
     * @var \PagSeguro\Payment\CreditCard\CreditCard
     */ 
    private $credit_card = '';
    
    /**
     * Get type
     * 
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    
    /**
     * Set type
     * 
     * @param string $type
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setType(string $type)
    {
        if (!Type::check($type)) {
            throw new PagseguroException("The [$type] isn't a valid payment method.");
        }
        
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * Get credit card
     * 
     * @return string | \PagSeguro\Payment\CreditCard\CreditCard
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }
    
    /**
     * Set credit card
     * 
     * @param \PagSeguro\Payment\CreditCard\CreditCard $credit_card
     * @return $this
     */
    public function setCreditCard(CreditCard $credit_card)
    {
        $this->credit_card = $credit_card;
        
        return $this;
    }
}