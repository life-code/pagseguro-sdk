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
     * @var integer
     */
    private $quantity = 0;
    
    /**
     * @var integer
     */
    private $no_interest_installment_quantity = 0;
    
    /**
     * @var float
     */
    private $value = 0;
    
    /**
     * Get quantity
     * 
     * @return integer
     */
    public function getQuantity() : integer
    {
        return $this->quantity;
    }
    
    /**
     * Set quantity
     * 
     * @param integer $quantity
     * @return $this
     */
    public function setQuantity(integer $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * Get no interest installment quantity
     * 
     * @return integer
     */
    public function getNoInterestInstallmentQuantity() : integer
    {
        return $this->no_interest_installment_quantity;
    }
    
    /**
     * Set no interest installment quantity
     * 
     * @param integer $no_interest_installment_quantity
     * @return $this
     */
    public function setNoInterestInstallmentQuantity(integer $no_interest_installment_quantity)
    {
        $this->no_interest_installment_quantity = $no_interest_installment_quantity;
        
        return $this;
    }
    
    /**
     * Get value
     * 
     * @return float
     */
    public function getValue() : integer
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