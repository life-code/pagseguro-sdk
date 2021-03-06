<?php

namespace PagSeguro\Shipping;

use PagSeguro\Contracts\Shipping\Shipping as ShippingContract;
use PagSeguro\Contracts\Common\Address;
use PagSeguro\Exceptions\PagSeguroException;
use PagSeguro\Shipping\Type;

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
class Shipping implements ShippingContract
{
    /**
     * @var \PagSeguro\Contracts\Common\Address
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
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Common\Address $address
     * @param float $cost
     * @param int $type
     * @return void
     */
    public function __construct(Address $address = null, float $cost = null, int $type = null)
    {
        ($address) ? $this->setAddress($address) : false;
        ($cost)    ? $this->setCost($cost)       : false;
        ($type)    ? $this->setType($type)       : false;
    }

    /**
     * Get address
     * 
     * @return string | \PagSeguro\Contracts\Common\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Common\Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        $this->setAddressRequired(true);
        
        return $this;
    }
    
    /**
     * Get cost
     * 
     * @return string
     */
    public function getCost() : string
    {
        return (string) $this->cost;
    }

    /**
     * Set cost
     * 
     * @param float $cost
     * @return $this
     */
    public function setCost(float $cost)
    {
        $this->cost = number_format($cost, 2, '.', '');
        $this->setAddressRequired(true);
        
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setType(int $type)
    {
        if (!Type::check($type)) {
            throw new PagSeguroException("The [$type] isn't a valid shipping type.");
        }
        
        $this->type = $type;
        $this->setAddressRequired(true);
        
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
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        if (!$this->getAddressRequired()) {
            return [
                'addressRequired' => $this->getAddressRequired(),
            ];
        }
        
        $response = [
            'address' => $this->getAddress()->toArray(),
        ];
        
        if ($type = $this->getType()) {
            $response['type'] = $type;
        }
        
        if ($cost = $this->getCost()) {
            $response['cost'] = $cost;
        }
        
        return $response;
    }
}