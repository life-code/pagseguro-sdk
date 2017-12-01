<?php

namespace PagSeguro\PreApprovals\Plan;

use PagSeguro\Contracts\PreApprovals\Plan\Expiration as ExpirationContract;
use PagSeguro\PreApprovals\Plan\Type;
use PagSeguro\Exceptions\PagseguroException;

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
class Expiration implements ExpirationContract
{
    /**
     * @var int
     */
    private $value;
    
    /**
     * @var string
     */
    private $unit;
    
    /**
     * Get value
     * 
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }
    
    /**
     * Set value
     * 
     * @param int $value
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * Get unit
     * 
     * @return int
     */
    public function getUnit() : int
    {
        return $this->unit;
    }

    /**
     * Set unit
     * 
     * @param string $unit
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setUnit(string $unit)
    {
        if (!Type::check($unit)) {
            throw new PagseguroException("The [$unit] isn't a valid unit.");
        }
        
        $this->unit = $unit;
        
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
            'value' => $this->getValue(),
            'unit'  => $this->getUnit(),
        ];
    }
}