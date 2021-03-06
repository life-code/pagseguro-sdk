<?php

namespace PagSeguro\Transactions;

use PagSeguro\Transactions\Type;
use PagSeguro\Transactions\Bank;
use PagSeguro\Contracts\Transactions\Method as MethodContract;
use PagSeguro\Contracts\Transactions\CreditCard\CreditCard;
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
     * Make new instance of this class
     * 
     * @param string $type
     * @param string $bank
     * @param \PagSeguro\Contracts\Transactions\CreditCard\CreditCard $credit_card
     * @return void
     */
    public function __construct(string $type = null, string $bank = null, CreditCard $credit_card = null)
    {
        ($type)        ? $this->setType($type)              : false;
        ($bank)        ? $this->setBank($bank)              : false;
        ($credit_card) ? $this->setCreditCard($credit_card) : false;
    }

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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setType(string $type)
    {
        if (!Type::check($type)) {
            throw new PagSeguroException($type, 2111);
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setBank(string $bank)
    {
        if (!Bank::check($bank)) {
            throw new PagSeguroException($bank, 2112);
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