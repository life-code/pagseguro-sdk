<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\PreApprovals\Plan as PlanContract;
use PagSeguro\Http\PreApprovals\Plan\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Plan implements PlanContract
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
     * @var string
     */
    private $redirect_url = '';
    
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
     * Get redirect_url
     * 
     * @return string
     */
    public function getRedirectURL() : string
    {
        return $this->redirect_url;
    }
    
    /**
     * Set redirect_url
     * 
     * @param string $redirect_url
     * @return $this
     */
    public function setRedirectURL(string $redirect_url)
    {
        $this->redirect_url = $redirect_url;
        
        return $this;
    }
    
    /**
     * Create new plan
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create()
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this)->send();
    }
}