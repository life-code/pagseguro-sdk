<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Contracts\AccountCredentials;
use PagSeguro\Contracts\Environment;
use PagSeguro\Contracts\Customer;
use PagSeguro\Http\PreApprovals\Request;
use PagSeguro\Payment\Method;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.4
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PreApproval
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
     * @var string
     */
    private $plan = '';
    
    /**
     * @var string
     */
    private $reference = '';
    
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
     * Get plan
     * 
     * @return string
     */
    public function getPlan() : string
    {
        return $this->plan;
    }
    
    /**
     * Set plan
     * 
     * @param string $plan
     * @return $this
     */
    public function setPlan(string $plan)
    {
        $this->plan = $plan;
        
        return $this;
    }
    
    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    
    /**
     * Set reference
     * 
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
        
        return $this;
    }
    
    /**
     * Approves one payment
     * 
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Payment\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function approve(Customer $customer, Method $method)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this, $customer, $method)->send();
    }
}