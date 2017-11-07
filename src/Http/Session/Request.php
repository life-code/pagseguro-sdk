<?php

namespace PagSeguro\Requests\Session;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Contracts\Http\Request as RequestContract;

class Request extends BaseRequest implements RequestContract
{
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod()
    {
        return self::POST;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl()
    {
        return $this->env->getUrl() . 'sessions?' . $this->credentials->toString();
    }
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders()
    {
        return [
            'Content-Type: application/xml',
        ];
    }
}