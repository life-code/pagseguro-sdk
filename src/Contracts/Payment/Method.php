<?php

namespace PagSeguro\Contracts\Payment;

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
interface Method
{
    /**
     * Set type
     * 
     * @param string $type
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setType(string $type);
    
    /**
     * Get credit card
     * 
     * @return string | \PagSeguro\Payment\CreditCard\CreditCard
     */
    public function getCreditCard();
    
    /**
     * Set credit card
     * 
     * @param \PagSeguro\Payment\CreditCard\CreditCard $credit_card
     * @return $this
     */
    public function setCreditCard(CreditCard $credit_card);
}