<?php

namespace PagSeguro\Contracts\Http;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.0
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
     * @return mixed
     */
    public function getData();
    
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
    
    /**
     * Get response class
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function getResponseClass();
    
    /**
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function createResponse($data, array $info);
}