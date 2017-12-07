<?php

namespace PagSeguro\Credentials;

use PagSeguro\Contracts\Credentials\Environment as EnvironmentContract;
use Dotenv\Dotenv;

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
class Environment implements EnvironmentContract
{
    /**
     * @var string
     */
    private $env_path = __DIR__ . '/../../../../../';
    
    /**
     * @var string
     */
    private $pagseguro_url = 'https://ws.{PAGSEGURO_ENV}pagseguro.uol.com.br/';
    
    /**
     * Make new instance of this class
     * 
     * @return void
     */
    public function __construct()
    {
        $dotenv = new Dotenv($this->env_path);
        $dotenv->load();
    }
    
    /**
     * Get environment
     * 
     * @return string
     */
    public function getEnv() : string
    {
        return strtoupper(env('PAGSEGURO_ENV', 'PRODUCTION'));
    }
    
    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail() : string
    {
        return env('PAGSEGURO_EMAIL', '');
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string
    {
        return env('PAGSEGURO_TOKEN_' . $this->getEnv(), '');
    }
    
    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return str_replace('{PAGSEGURO_ENV}', $this->getReplace(), $this->pagseguro_url);
    }
    
    /**
     * Get replace
     * 
     * @return string
     */
    public function getReplace() : string
    {
        $replace = '';
        
        if ($this->getEnv() === 'SANDBOX') {
            $replace = 'sandbox.';
        }
        
        return $replace;
    }
    
    /**
     * Get location
     * 
     * @return string
     */
    public function getLocation() : string
    {
        return env('PAGSEGURO_LOCATION', '');
    }
}