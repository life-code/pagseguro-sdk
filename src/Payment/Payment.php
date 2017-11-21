<?php

namespace PagSeguro\Payment;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\Payment\Payment as PaymentContract;
use PagSeguro\Contracts\Payment\Method;
use PagSeguro\Contracts\Customer;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Items\Item;
use PagSeguro\Http\Payment\Request;
use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.96
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
    private $receive_email = '';
    
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
    
    /**
     * Set receive_email
     * 
     * @param string $receive_email
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setReceiveEmail(string $receive_email)
    {
        if (!$this->validateEmail($receive_email)) {
            throw new PagseguroException("The [$receive_email] isn't a valid email.");
        }
        
        $this->receive_email = $receive_email;
        
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
     * Approves one payment
     * 
     * @param \PagSeguro\Contracts\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Contracts\Payment\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function pay(Shipping $shipping, Customer $customer, Method $method)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this, $shipping, $customer, $method)->send();
    }
}