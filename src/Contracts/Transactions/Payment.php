<?php

namespace PagSeguro\Contracts\Transactions;

use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Items\Item;
use PagSeguro\Contracts\Transactions\Method;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Payment
{
    /**
     * Get currency
     * 
     * @return string
     */
    public function getCurrency() : string;
    
    /**
     * Set currency
     * 
     * @param string $currency
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setCurrency(string $currency);
    
    /**
     * Get mode
     * 
     * @return string
     */
    public function getMode() : string;
    
    /**
     * Set mode
     * 
     * @param string $mode
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setMode(string $mode);
    
    /**
     * Get notification_url
     * 
     * @return string
     */
    public function getNotificationURL() : string;
    
    /**
     * Set notification_url
     * 
     * @param string $notification_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setNotificationURL(string $notification_url);
    
    /**
     * Get redirect URL
     * 
     * @return string
     */
    public function getRedirectURL() : string;
    
    /**
     * Set redirect URL
     * 
     * @param string $redirect_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setRedirectURL(string $redirect_url);
    
    /**
     * Get receive_email
     * 
     * @return string
     */
    public function getReceiverEmail() : string;
    
    /**
     * Set receive_email
     * 
     * @param string $receive_email
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setReceiverEmail(string $receive_email);
    
    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() : string;
    
    /**
     * Set reference
     * 
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference);
    
    /**
     * Get items
     * 
     * @return array
     */
    public function getItems() : array;
    
    /**
     * Set items
     * 
     * @param \PagSeguro\Items\Item $item
     * @return $this
     */
    public function setItems(Item $item);
    
    /**
     * Approves one payment
     * 
     * @param \PagSeguro\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Transactions\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function pay(Shipping $shipping, Customer $customer, Method $method);
}