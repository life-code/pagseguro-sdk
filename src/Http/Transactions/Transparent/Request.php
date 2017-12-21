<?php

namespace PagSeguro\Http\Transactions\Transparent;

use PagSeguro\Contracts\Transactions\Payment;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Transactions\Method;
use PagSeguro\Common\Documents;
use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Transactions\Transparent\Response;
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
        return $this->env->getUrl() . 'v2/transactions?' . $this->credentials->toString();
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
            'mode'            => $payment->getMode(),
            'currency'        => $payment->getCurrency(),
            'notificationURL' => $payment->getNotificationURL(),
            'receiverEmail'   => $payment->getReceiverEmail(),
            'reference'       => $payment->getReference(),
            'sender'          => $customer->toArray(true),
            'items'           => $items,
            'shipping'        => $shipping->toArray(),
            'method'          => $method->getType(),
        ];
        
        if ($method->getBank()) {
            $data['bank']['name'] = $method->getBank();
        }
        
        if ($method->getType() === 'creditcard') {
            $data['creditCard'] = [
                'token'          => $method->getCreditCard()->getToken(),
                'installment'    => $method->getCreditCard()->getInstallment()->toArray(),
                'holder'         => $method->getCreditCard()->getHolder()->toArray(true),
                'billingAddress' => $method->getCreditCard()->getAddress()->toArray(),
            ];
        }
        
        $this->data = ArrayToXml::convert($data, 'payment');
        
        return $this;
    }
}