<?php

namespace PagSeguro\Payment\CreditCard;

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
class Installment
{
    /**
     * @var int
     */
    private $quantity = 0;
    
    /**
     * @var int
     */
    private $no_interest_installment_quantity = 0;
    
    /**
     * @var float
     */
    private $value = 0;
    
    /**
     * Get quantity
     * 
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    
    /**
     * Set quantity
     * 
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * Get no interest installment quantity
     * 
     * @return int
     */
    public function getNoInterestInstallmentQuantity() : int
    {
        return $this->no_interest_installment_quantity;
    }
    
    /**
     * Set no interest installment quantity
     * 
     * @param int $no_interest_installment_quantity
     * @return $this
     */
    public function setNoInterestInstallmentQuantity(int $no_interest_installment_quantity)
    {
        $this->no_interest_installment_quantity = $no_interest_installment_quantity;
        
        return $this;
    }
    
    /**
     * Get value
     * 
     * @return float
     */
    public function getValue() : int
    {
        return $this->value;
    }
    
    /**
     * Set value
     * 
     * @param float $value
     * @return $this
     */
    public function setValue(float $value)
    {
        $this->value = $value;
        
        return $this;
    }
}