<?php

namespace PagSeguro\Support;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;


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
     * Get env
     * 
     * return \PagSeguro\Credentials\Credentials\Environment
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