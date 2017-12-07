<?php

namespace PagSeguro\Session;

use PagSeguro\Contracts\Session\Session as SessionContract;
use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Http\Session\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Session implements SessionContract
{
    /**
     * @var \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    private $credentials = '';
    
    /**
     * @var \PagSeguro\Contracts\Credentials\Environment
     */
    private $env = '';
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\AccountCredentials $credentials
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Create Session ID
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create()
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->send();
    }
}