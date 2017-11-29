<?php

namespace PagSeguro\Transactions;

use PagSeguro\Transactions\Type;
use PagSeguro\Transactions\Bank;
use PagSeguro\Contracts\Transactions\Method as MethodContract;
use PagSeguro\Contracts\Transactions\CreditCard\CreditCard;
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
class Method implements MethodContract
{
    /**
     * @var string
     */ 
    private $type = '';
    
    /**
     * @var string
     */ 
    private $bank = '';
    
    /**
     * @var \PagSeguro\Contracts\Transactions\CreditCard\CreditCard
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
     * Get bank
     * 
     * @return string
     */
    public function getBank() : string
    {
        return $this->bank;
    }
    
    /**
     * Set bank
     * 
     * @param string $bank
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setBank(string $bank)
    {
        if (!Bank::check($bank)) {
            throw new PagseguroException("The [$bank] isn't a valid bank.");
        }
        
        $this->bank = $bank;
        
        return $this;
    }
    
    /**
     * Get credit card
     * 
     * @return string | \PagSeguro\Contracts\Transactions\CreditCard\CreditCard
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }
    
    /**
     * Set credit card
     * 
     * @param \PagSeguro\Contracts\Transactions\CreditCard\CreditCard $credit_card
     * @return $this
     */
    public function setCreditCard(CreditCard $credit_card)
    {
        $this->credit_card = $credit_card;
        
        return $this;
    }
}