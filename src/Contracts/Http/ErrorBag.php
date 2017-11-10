<?php

namespace PagSeguro\Contracts\Http;

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
    public function allCodes();
    
    /**
     * Get all error values
     * 
     * @return array
     */
    public function allValues();
}