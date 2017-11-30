<?php

namespace PagSeguro\Http\Transactions;

use PagSeguro\Contracts\Transactions\Payment;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Transactions\Method;
use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Transactions\Response;
use Spatie\ArrayToXml\ArrayToXml;

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
class Request extends BaseRequest
{
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return self::POST;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return $this->env->getUrl() . '/v2/checkout?' . $this->credentials->toString();
    }
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array
    {
        return [
            'cache-control: no-cache',
            'Content-Type: ' . self::XML,
        ];
    }
    
    /**
     * Get response class
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function getResponseClass()
    {
        return new Response($this->env, 'Transactions');
    }
    
    /**
     * Exchange data
     * 
     * @param \PagSeguro\PreApprovals\Transactions $payment
     * @param \PagSeguro\Contracts\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Transactions\Method $method
     * @return $this
     */
    public function exchangeData(Payment $payment, Shipping $shipping, Customer $customer, Method $method)
    {
        $items = [];
        
        foreach ($payment->getItems() as $item) {
            $items['item'][] = $item->toArray();
        }
        
        $data = [
            'currency'    => $payment->getCurrency(),
            'redirectURL' => $payment->getRedirectURL(),
            'reference'   => $payment->getReference(),
            'sender'      => $customer->toArray(true),
            'items'       => $items,
            'shipping'    => $shipping->toArray(),
            'receiver'    => [
                'email' => $payment->getReceiveEmail(),
            ],
        ];
        
        $this->data = ArrayToXml::convert($data, 'checkout');
        
        return $this;
    }
}