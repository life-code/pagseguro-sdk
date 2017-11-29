<?php

namespace PagSeguro\Http\Transactions\Notifications;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Transactions\Notifications\Response;

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
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function createResponse($data, array $info)
    {
        $response = new Response($this->env, 'Transactions');
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $response->setErrors([$data]);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors(['Not Found']);
        }
        
        return $response->setData($data);
    }
}