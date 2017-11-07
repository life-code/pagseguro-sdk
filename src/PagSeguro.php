<?php

namespace PagSeguro;

use PagSeguro\Support\Factory;
use PagSeguro\Session\Session;

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
class PagSeguro
{
    use Factory;
    
    /**
     * The PagSeguro version.
     *
     * @var string
     */
    const VERSION = '0.6';

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version()
    {
        return self::VERSION;
    }
    
    /**
     * Handles pagseguro instance
     * 
     * @return \PagSeguro\PagSeguro
     */ 
    public static function session()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new Session($credentials, $env);
    }
}