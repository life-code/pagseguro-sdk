<?php

namespace PagSeguro\Payment;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Http\Payment\Request;
use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Payment
{
    use Validator;
    
    /**
     * @var \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    private $credentials = '';
    
    /**
     * @var \PagSeguro\Contracts\Credentials\Environment
     */
    private $env = '';
    
    /**
     * @var string
     */
    private $mode = '';
    
    /**
     * @var string
     */
    private $currency = '';
    
    /**
     * @var string
     */
    private $notification_url = '';
    
    /**
     * @var string
     */
    private $receive_email = '';
    
    /**
     * @var string
     */
    private $reference = '';
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\AccountCredentials $credentials
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Get currency
     * 
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    
    /**
     * Set currency
     * 
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
        
        return $this;
    }
    
    /**
     * Get mode
     * 
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    
    /**
     * Set mode
     * 
     * @param string $mode
     * @return $this
     */
    public function setMode(string $mode)
    {
        $this->mode = $mode;
        
        return $this;
    }
    
    /**
     * Get notification_url
     * 
     * @return string
     */
    public function getNotificationURL() : string
    {
        return $this->notification_url;
    }
    
    /**
     * Set notification_url
     * 
     * @param string $notification_url
     * @return $this
     */
    public function setNotificationURL(string $notification_url)
    {
        $this->notification_url = $notification_url;
        
        return $this;
    }
    
    /**
     * Get receive_email
     * 
     * @return string
     */
    public function getReceiveEmail() : string
    {
        return $this->receive_email;
    }
}