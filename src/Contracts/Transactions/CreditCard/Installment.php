<?php

namespace PagSeguro\Contracts\Transactions\CreditCard;

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
interface Installment
{
    /**
     * Get quantity
     * 
     * @return int
     */
    public function getQuantity() : int;
    
    /**
     * Set quantity
     * 
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);
    
    /**
     * Get no interest installment quantity
     * 
     * @return int
     */
    public function getNoInterestInstallmentQuantity() : int;
    
    /**
     * Set no interest installment quantity
     * 
     * @param int $no_interest_installment_quantity
     * @return $this
     */
    public function setNoInterestInstallmentQuantity(int $no_interest_installment_quantity);
    
    /**
     * Get value
     * 
     * @return string
     */
    public function getValue() : string;
    
    /**
     * Set value
     * 
     * @param float $value
     * @return $this
     */
    public function setValue(float $value);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}