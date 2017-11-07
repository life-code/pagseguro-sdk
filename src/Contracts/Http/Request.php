<?php

namespace PagSeguro\Contracts\Http;

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