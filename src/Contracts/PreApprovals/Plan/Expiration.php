<?php

namespace PagSeguro\Contracts\PreApprovals\Plan;

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
interface Expiration
{
    /**
     * Get value
     * 
     * @return int
     */
    public function getValue() : int;
    
    /**
     * Set value
     * 
     * @param int $value
     * @return $this
     */
    public function setValue(int $value);
    
    /**
     * Get unit
     * 
     * @return int
     */
    public function getUnit() : int;

    /**
     * Set unit
     * 
     * @param string $unit
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setUnit(string $unit);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}