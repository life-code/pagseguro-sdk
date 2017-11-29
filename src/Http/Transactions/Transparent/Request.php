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
            'receiverEmail'   => $payment->getReceiveEmail(),
            'reference'       => $payment->getReference(),
            'sender'          => [
                'name'      => $customer->getName(),
                'email'     => $customer->getEmail(),
                'hash'      => $customer->getHash(),
                'phone'     => $customer->getPhone()->toArray(),
                'documents' => [
                    'document' => $customer->getDocuments()->toArray(),
                ],
            ],
            'items'           => $items,
            'shipping'        => [
                'addressRequired' => $shipping->getAddressRequired(),
            ],
            'method'          => $method->getType(),
            'creditCard'      => [
                'token'          => $method->getCreditCard()->getToken(),
                'installment'    => $method->getCreditCard()->getInstallment()->toArray(),
                'holder'         => [
                    'name'      => $method->getCreditCard()->getHolder()->getName(),
                    'birthDate' => $method->getCreditCard()->getHolder()->getBirthDate(),
                    'documents' => [
                        'document' => $method->getCreditCard()->getHolder()->getDocuments()->toArray(),
                    ],
                    'phone'     => $method->getCreditCard()->getHolder()->getPhone()->toArray(),
                ],
                'billingAddress' => $method->getCreditCard()->getAddress()->toArray(),
            ],
        ];
        
        $this->data = ArrayToXml::convert($data, 'payment');
        
        return $this;
    }
    
    /**
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function createResponse($data, array $info)
    {
        $response = new Response($this->env, 'Transactions');
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $response->setErrors([$data]);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors(['Not Found']);
        }
        
        return $response->setData($data);
    }
}