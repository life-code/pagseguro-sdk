<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Contracts\AccountCredentials;
use PagSeguro\Contracts\Environment;
use PagSeguro\Http\Notifications\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Notification
{
    /**
     * @var \PagSeguro\Contracts\AccountCredentials
     */
    private $credentials = '';
    
    /**
     * @var \PagSeguro\Contracts\Environment
     */
    private $env = '';
    
    /**
     * Make new instance of this class.
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