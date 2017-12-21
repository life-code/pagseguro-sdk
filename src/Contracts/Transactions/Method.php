<?php

namespace PagSeguro\Contracts\Transactions;

use PagSeguro\Contracts\Transactions\CreditCard\CreditCard;

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
interface Method
{

    /**
     * Get type
     * 
     * @return string
     */
    public function getType() : string;
    
    /**
     * Set type
     * 
     * @param string $type
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setType(string $type);
    
    /**
     * Get bank
     * 
     * @return string
     */
    public function getBank() : string;
    
    /**
     * Set bank
     * 
     * @param string $bank
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setBank(string $bank);
    
    /**
     * Get credit card
     * 
     * @return string | \PagSeguro\Transactions\CreditCard\CreditCard
     */
    public function getCreditCard();
    
    /**
     * Set credit card
     * 
     * @param \PagSeguro\Transactions\CreditCard\CreditCard $credit_card
     * @return $this
     */
    public function setCreditCard(CreditCard $credit_card);
}