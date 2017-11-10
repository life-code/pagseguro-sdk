<?php

namespace PagSeguro\Http;

use PagSeguro\Http\RequestBuilder;
use PagSeguro\Contracts\Http\Request as RequestContract;
use PagSeguro\Contracts\AccountCredentials;
use PagSeguro\Contracts\Environment;

abstract class Request implements RequestContract
{
    use RequestBuilder;
    
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
     * @var \PagSeguro\Contracts\Environment
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
     * @param \PagSeguro\Contracts\Environment $env
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
     * @return array
     */
    public function getData() : array
    {
        return $this->data;
    }
}