<?php

namespace PagSeguro\Contracts\Common;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Documents
{
    /**
     * Get item
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getItem(string $type) : string;
    
    /**
     * Set item
     * 
     * @param string $cpf
     * @param string $item
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setItem(string $type, string $item);
    
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public function validate(string $type) : bool;
    
    /**
     * Get types
     * 
     * @return array
     */
    public function getTypes();
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}