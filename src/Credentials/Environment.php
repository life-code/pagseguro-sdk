<?php

namespace PagSeguro\Credentials;

use PagSeguro\Contracts\Credentials\Environment as EnvironmentContract;
use PagSeguro\Exceptions\PagSeguroException;
use PagSeguro\Support\Validator;
use PagSeguro\Languages\Location;
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
    use Validator;
    
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getEmail() : string
    {
        $email = env('PAGSEGURO_EMAIL', '');
        
        if (!$this->validateEmail($email)) {
            throw new PagSeguroException($email, 2101);
        }
        
        return $email;
    }
    
    /**
     * Get token
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getToken() : string
    {
        $token = env('PAGSEGURO_TOKEN_' . $this->getEnv(), '');
        
        if (strlen($token) !== 32) {
            throw new PagSeguroException($token, 2102);
        }
        
        return $token;
    }
    
    /**
     * Get URL
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getUrl() : string
    {
        $url = str_replace('{PAGSEGURO_ENV}', $this->getReplace(), $this->pagseguro_url);
        
        if (!$this->validateUrl($url)) {
            throw new PagSeguroException("The PagSeguro credential [$url] isn't a valid URL.");
        }
        
        return $url;
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getLocation() : string
    {
        $location = env('PAGSEGURO_LOCATION', 'en');
        
        if (! Location::check($location)) {
            throw new PagSeguroException("The PagSeguro location [$location] isn't a valid location.");
        }
        
        return $location;
    }
}