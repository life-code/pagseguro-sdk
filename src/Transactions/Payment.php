<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\Transactions\Payment as PaymentContract;
use PagSeguro\Contracts\Transactions\Method;
use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Items\Item;
use PagSeguro\Http\Transactions\Transparent\Request as TransparentRequest;
use PagSeguro\Http\Transactions\Request;
use PagSeguro\Transactions\PaymentMode;
use PagSeguro\Transactions\Currency;
use PagSeguro\Exceptions\PagSeguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Payment implements PaymentContract
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
    private $mode = 'default';
    
    /**
     * @var string
     */
    private $currency = 'BRL';
    
    /**
     * @var string
     */
    private $notification_url = '';
    
    /**
     * @var string
     */
    private $redirect_url = '';
    
    /**
     * @var string
     */
    private $receiver_email = '';
    
    /**
     * @var string
     */
    private $reference = '';
    
    /**
     * @var array
     */
    private $items = [];
    
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        if (! Currency::check($currency)) {
            throw new PagSeguroException($currency, 2101);
        }
        
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setMode(string $mode)
    {
        if (! PaymentMode::check($mode)) {
            throw new PagSeguroException($mode, 2102);
        }
        
        $this->mode = $mode;
        
        return $this;
    }
    
    /**
     * Get notification URL
     * 
     * @return string
     */
    public function getNotificationURL() : string
    {
        return $this->notification_url;
    }
    
    /**
     * Set notification URL
     * 
     * @param string $notification_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setNotificationURL(string $notification_url)
    {
        if (!$this->validateUrl($notification_url)) {
            throw new PagSeguroException($notification_url, 2103);
        }
        
        $this->notification_url = $notification_url;
        
        return $this;
    }
    
    /**
     * Get redirect URL
     * 
     * @return string
     */
    public function getRedirectURL() : string
    {
        return $this->redirect_url;
    }
    
    /**
     * Set redirect URL
     * 
     * @param string $redirect_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setRedirectURL(string $redirect_url)
    {
        if (!$this->validateUrl($redirect_url)) {
            throw new PagSeguroException($redirect_url, 2104);
        }
        
        $this->redirect_url = $redirect_url;
        
        return $this;
    }
    
    /**
     * Get receive email
     * 
     * @return string
     */
    public function getReceiverEmail() : string
    {
        return $this->receiver_email;
    }
    
    /**
     * Set receive email
     * 
     * @param string $receiver_email
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setReceiverEmail(string $receiver_email)
    {
        if (!$this->validateEmail($receiver_email)) {
            throw new PagSeguroException($receiver_email, 2105);
        }
        
        $this->receiver_email = $receiver_email;
        
        return $this;
    }
    
    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    
    /**
     * Set reference
     * 
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
        
        return $this;
    }
    
    /**
     * Get items
     * 
     * @return array
     */
    public function getItems() : array
    {
        return $this->items;
    }
    
    /**
     * Set items
     * 
     * @param \PagSeguro\Contracts\Items\Item $item
     * @return $this
     */
    public function setItems(Item $item)
    {
        $this->items[] = $item;
        
        return $this;
    }
    
    /**
     * Approves one transparent payment
     * 
     * @param \PagSeguro\Contracts\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Transactions\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function transparentPay(Shipping $shipping, Customer $customer, Method $method)
    {
        $request = new TransparentRequest($this->credentials, $this->env);
        
        return $request->exchangeData($this, $shipping, $customer, $method)->send();
    }
    
    /**
     * Approves one payment
     * 
     * @param \PagSeguro\Contracts\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Transactions\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function pay(Shipping $shipping, Customer $customer, Method $method)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this, $shipping, $customer, $method)->send();
    }
}