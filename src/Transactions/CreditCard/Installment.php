<?php

namespace PagSeguro\Transactions\CreditCard;

use PagSeguro\Contracts\Transactions\CreditCard\Installment as InstallmentContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Installment implements InstallmentContract
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
     * @return string
     */
    public function getValue() : string
    {
        return (string) $this->value;
    }
    
    /**
     * Set value
     * 
     * @param float $value
     * @return $this
     */
    public function setValue(float $value)
    {
        $this->value = number_format($value, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'quantity'                      => $this->getQuantity(),
            'noInterestInstallmentQuantity' => $this->getNoInterestInstallmentQuantity(),
            'value'                         => $this->getValue(),
        ];
    }
}