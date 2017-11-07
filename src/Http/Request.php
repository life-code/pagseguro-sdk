<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Request as RequestContract;

abstract class Request implements RequestContract
{
    /**
     * @var \PagSeguro\AccountCredentials
     */
    private $credentials;
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\AccountCredentials $credentials
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
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