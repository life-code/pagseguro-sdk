<?php

namespace PagSeguro\Contracts\Shipping;

use PagSeguro\Contracts\Common\Address;

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
interface Shipping
{
    /**
     * Get address
     * 
     * @return string | \PagSeguro\Contracts\Common\Address
     */
    public function getAddress();

    /**
     * Set address
     * 
     * @param \PagSeguro\Contracts\Common\Address $address
     * @return $this
     */
    public function setAddress(Address $address);
    
    /**
     * Get cost
     * 
     * @return string
     */
    public function getCost() : string;

    /**
     * Set cost
     * 
     * @param float $cost
     * @return $this
     */
    public function setCost(float $cost);
    
    /**
     * Get type
     * 
     * @return int
     */
    public function getType() : int;

    /**
     * Set type
     * 
     * @param int $type
     * @return $this
     */
    public function setType(int $type);
    
    /**
     * Get address required
     * 
     * @return bool
     */
    public function getAddressRequired() : bool;

    /**
     * Set address required
     * 
     * @param bool $address_required
     * @return $this
     */
    public function setAddressRequired(bool $address_required);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}