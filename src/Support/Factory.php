<?php

namespace PagSeguro\Support;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;

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
trait Factory
{
    /**
     * @var \PagSeguro\Credentials\Credentials\Environment
     */
    private static $env;
    
    /**
     * @var \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    private static $credentials;
    
    /**
     * Get environment
     * 
     * return \PagSeguro\Contracts\Credentials\Environment
     */
    public static function getEnv()
    {
        if (!self::$env) {
            self::$env = new Environment();
        }
        
        return self::$env;
    }
    
    /**
     * Get credentials
     * 
     * return \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    public static function getCredentials()
    {
        if (!self::$credentials) {
            $env = self::getEnv();
            self::$credentials = new AccountCredentials($env->getEmail(), $env->getToken());
        }
        
        return self::$credentials;
    }
}