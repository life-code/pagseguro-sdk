<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;
use PagSeguro\Http\PreApprovals\Notifications\Request;
use PagSeguro\Http\PreApprovals\Notifications\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Notification
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
     * Make new instance of this class.
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
     * Allows you to view the data of a recurrence by the notification code.
     * 
     * @param string $code
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function forCode(string $code)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->setCode($code)->send();
    }
}