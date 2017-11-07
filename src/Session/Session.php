<?php

namespace PagSeguro\Session;

use PagSeguro\AccountCredentials;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Session
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
    public function __construct(AccountCredentials $credentials)
    {
        $this->credentials = $credentials;
    }
    
    /**
     * Create Session ID
     * 
     * @return \PagSeguro\Responses\ResponseInterface
     */
    public function create()
    {
        // 
    }
}