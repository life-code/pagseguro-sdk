<?php

namespace PagSeguro\Credentials;

use PagSeguro\Contracts\Credentials\Environment as EnvironmentContract;
use Dotenv\Dotenv;

class Environment implements EnvironmentContract
{
    /**
     * @var string
     */ 
    private $env_path = __DIR__ . '/../../../../../';
    
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
     * Get token
     * 
     * @return string
     */
    public function getAppID() : string
    {
        return env('PAGSEGURO_APP_ID_' . $this->getEnv(), '');
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getAppKey() : string
    {
        return env('PAGSEGURO_APP_KEY_' . $this->getEnv(), '');
    }
    
    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return str_replace('{PAGSEGURO_ENV}', $this->getReplace(), env('PAGSEGURO_URL', ''));
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getScript() : string
    {
        return str_replace('{PAGSEGURO_ENV}', $this->getReplace(), env('PAGSEGURO_SCRIPT', ''));
    }
    
    /**
     * Get replace
     * 
     * @return string
     */ 
    private function getReplace() : string
    {
        $replace = '';
        
        if ($this->getEnv() === 'SANDBOX') {
            $replace = 'sandbox.';
        }
        
        return $replace;
    }
}