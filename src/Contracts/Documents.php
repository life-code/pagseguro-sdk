<?php

namespace PagSeguro\Contracts;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.4
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
     * @return string
     */
    public function getItem($type);
    
    /**
     * Set item
     * 
     * @param string $cpf
     * @param string $item
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
}