<?php

namespace PagSeguro\Payment;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\Payment\Notification as NotificationContract;
use PagSeguro\Http\Payment\Notifications\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.96
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Notification implements NotificationContract
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
     * Make new instance of this class.
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