<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\Transactions\Abandoned as AbandonedContract;
use PagSeguro\Contracts\Transactions\Interval as IntervalContract;
use PagSeguro\Http\Transactions\Abandoned\Request;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Abandoned implements AbandonedContract
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
     * Search abandoned Transactions
     * 
     * @param \PagSeguro\Contracts\Transactions\Interval $interval
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function search(IntervalContract $interval)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->setInterval($interval)->send();
    }
}