<?php

namespace PagSeguro\Shipping;

use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Contracts\Address;
use PagSeguro\Shipping\Type;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.9
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Shipping
{
    /**
     * @var \PagSeguro\Contracts\Address
     */
    private $address = '';

    /**
     * @var float
     */
    private $cost = '';
    
    /**
     * @var int
     */
    private $type = '';
    
    /**
     * @var bool
     */
    private $address_required = false;
    
    /**
     * Get address
     * 
     * @return string | \PagSeguro\Contracts\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * Get cost
     * 
     * @return float
     */
    public function getCost() : float
    {
        return $this->cost;
    }

    /**
     * Set cost
     * 
     * @param float $cost
     * @return $this
     */
    public function setCost(float $cost)
    {
        $this->cost = $cost;
        
        return $this;
    }
    
    /**
     * Get type
     * 
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * Set type
     * 
     * @param int $type
     * @return $this
     */
    public function setType(int $type)
    {
        if (!Type::exists($type)) {
            throw new PagseguroException("The [$type] isn't a valid type.");
        }
        
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * Get address required
     * 
     * @return bool
     */
    public function getAddressRequired() : bool
    {
        return $this->address_required;
    }

    /**
     * Set address required
     * 
     * @param bool $address_required
     * @return $this
     */
    public function setAddressRequired(bool $address_required)
    {
        $this->address_required = $address_required;
        
        return $this;
    }
}