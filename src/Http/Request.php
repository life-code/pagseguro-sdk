<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Request as RequestContract;
use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;

abstract class Request implements RequestContract
{
    /**
     * @var \PagSeguro\Credentials\AccountCredentials
     */
    private $credentials;
    
    /**
     * @var \PagSeguro\Credentials\Environment
     */
    private $env;
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Credentials\AccountCredentials $credentials
     * @param \PagSeguro\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
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
}