<?php

namespace PagSeguro;

use PagSeguro\AccountCredentials;
use PagSeguro\Session\Session;

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
class Factory
{
    /**
     * Handles pagseguro instance
     * 
     * @return \PagSeguro\PagSeguro
     */ 
    public static function session(string $email = '', string $token = '')
    {
        $credentials = new AccountCredentials($email, $token);
        
        return new Session($credentials);
    }
}