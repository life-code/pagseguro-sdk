<?php

namespace PagSeguro\Contracts\Http;

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
interface ErrorBag
{
    /**
     * Set data
     * 
     * @param array $errors
     * @return $this
     */
    public function setData(array $errors);
    
    /**
     * Get first error
     * 
     * @return bool | object
     */
    public function first();
    
    /**
     * Get last error
     * 
     * @return bool | object
     */
    public function last();
    
    /**
     * Check code exists
     * 
     * @param int $code
     * @return bool
     */
    public function codeExists(int $code);
    
    /**
     * Get all errors
     * 
     * @return array
     */
    public function all();
    
    /**
     * Get all error codes
     * 
     * @return array
     */
    public function codes();
    
    /**
     * Get all error values
     * 
     * @return array
     */
    public function values();
}