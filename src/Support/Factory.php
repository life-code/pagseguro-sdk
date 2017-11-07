<?php

namespace PagSeguro\Support;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;

trait Factory
{
    /**
     * @var \PagSeguro\Credentials\Environment
     */ 
    private $env;
    
    /**
     * @var \PagSeguro\Credentials\AccountCredentials
     */ 
    private $credentials;
    
    /**
     * Get env
     * 
     * return \PagSeguro\Credentials\Environment
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
     * return \PagSeguro\Credentials\AccountCredentials
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