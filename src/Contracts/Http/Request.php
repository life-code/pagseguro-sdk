<?php

namespace PagSeguro\Contracts\Http;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Request
{
    /**
     * Get request data
     * 
     * @return array
     */
    public function getData() : array;
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array;
    
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string;
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string;
}