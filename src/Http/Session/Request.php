<?php

namespace PagSeguro\Http\Session;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Session\Response;

class Request extends BaseRequest
{
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return self::POST;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return $this->env->getUrl() . 'sessions?' . $this->credentials->toString();
    }
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array
    {
        return [
            'cache-control: no-cache',
            'Content-Type: application/xml',
            'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1',
        ];
    }
}