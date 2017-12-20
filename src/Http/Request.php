<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Request as RequestContract;
use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Http\RequestBuilder;

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
abstract class Request extends RequestBuilder implements RequestContract
{
    /**
     * @var strint
     */
    const POST = 'POST';
    
    /**
     * @var strint
     */
    const PUT = 'PUT';
    
    /**
     * @var strint
     */
    const GET = 'GET';
    
    /**
     * @var strint
     */
    const DELETE = 'DELETE';
    
    /**
     * @var strint
     */
    const JSON = 'application/json';
    
    /**
     * @var strint
     */
    const XML = 'application/xml';
    
    /**
     * @var \PagSeguro\Contracts\AccountCredentials
     */
    protected $credentials;
    
    /**
     * @var \PagSeguro\Contracts\Credentials\Environment
     */
    protected $env;
    
    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\AccountCredentials $credentials
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Get request data
     * 
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
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
        $response = $this->getResponseClass();
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $response->setErrors([401 => $data]);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors([404 => 'Not Found']);
        }
        
        return $response->setData($data);
    }
}