<?php

namespace PagSeguro\Credentials;

class Environment
{
    /**
     * Get environment
     * 
     * @return string
     */
    public function getEnv()
    {
        return strtoupper(env('PAGSEGURO_ENV'));
    }
    
    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail()
    {
        return env('PAGSEGURO_EMAIL');
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getToken()
    {
        return env('PAGSEGURO_TOKEN_' . $this->getEnv());
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getAppID()
    {
        return env('PAGSEGURO_APP_ID_' . $this->getEnv());
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getAppKey()
    {
        return env('PAGSEGURO_APP_KEY_' . $this->getEnv());
    }
    
    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl()
    {
        return str_replace('{PAGSEGURO_ENV}', $this->getReplace(), env('PAGSEGURO_URL'));
    }
    
    /**
     * Get token
     * 
     * @return string
     */
    public function getScript()
    {
        return str_replace('{PAGSEGURO_ENV}', $this->getReplace(), env('PAGSEGURO_SCRIPT'));
    }
    
    /**
     * Get replace
     * 
     * @return string
     */ 
    private function getReplace()
    {
        $replace = '';
        
        if ($this->getEnv() === 'SANDBOX') {
            $replace = 'sandbox.';
        }
        
        return $replace;
    }
}