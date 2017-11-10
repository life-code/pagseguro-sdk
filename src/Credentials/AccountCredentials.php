<?php

namespace PagSeguro\Credentials;

use PagSeguro\Contracts\Credentials\AccountCredentials as AccountCredentialsContract;
use PagSeguro\Support\Validator;
use PagSeguro\Exceptions\PagSeguroException;

class AccountCredentials implements AccountCredentialsContract
{
    use Validator;
    
    /**
     * Email pagSeguro
     * 
     * @var string
     */
    private $email = '';
    
    /**
     * Token pagSeguro
     * 
     * @var string
     */
    private $token = '';
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Credentials\Environment $env
     * @return void
     */
    public function __construct(string $email = '', string $token = '')
    {
        if ($email) {
            $this->setEmail($email);
        }
        
        if ($token) {
            $this->setToken($token);
        }
    }

    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Set email
     * 
     * @param string $email
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setEmail(string $email)
    {
        if (!$this->validateEmail($email)) {
            throw new PagSeguroException("The [$email] isn't a valid email.");
        }
        
        $this->email = $email;
        
        return $this;
    }

    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * Set token
     * 
     * @param string $token
     * @return $this
     */
    public function setToken(string $token)
    {
        $this->token = $token;
        
        return $this;
    }

    /**
     * Get attributes to array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'email' => $this->getEmail(),
            'token' => $this->getToken(),
        ];
    }

    /**
     * Get attributes to string
     * 
     * @return string
     */
    public function toString() : string
    {
        return 'email=' . $this->getEmail() . '&token=' . $this->getToken();
    }
}