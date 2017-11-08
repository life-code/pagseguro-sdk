<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;
use PagSeguro\Http\PreApprovals\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.6
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PreApproval
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
     * Approves one payment
     * 
     * @param Customer $customer
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function approve(Customer $customer)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->send();
    }
}