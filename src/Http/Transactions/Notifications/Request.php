<?php

namespace PagSeguro\Http\Transactions\Notifications;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Transactions\Notifications\Response;

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
class Request extends BaseRequest
{
    /**
     * @var string
     */
    private $code = '';
    
    /**
     * Get code
     * 
     * @retrn string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * Set code
     * 
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return self::GET;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return $this->env->getUrl() . 'v3/transactions/notifications/' . $this->getCode() . '?' . $this->credentials->toString();
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
        ];
    }
    
    /**
     * Get response class
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function getResponseClass()
    {
        return new Response($this->env, 'Transactions');
    }
}