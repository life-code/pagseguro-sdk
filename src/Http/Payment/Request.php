<?php

namespace PagSeguro\Http\Payment;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Payment\Response;
use PagSeguro\Contracts\Payment\Payment;
use PagSeguro\Contracts\Shipping\Shipping;
use PagSeguro\Contracts\Common\Documents;
use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Payment\Method;
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
     * Exchange data
     * 
     * @param \PagSeguro\PreApprovals\Payment $payment
     * @param \PagSeguro\Contracts\Shipping\Shipping $shipping
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Payment\Method $method
     * @return $this
     */
    public function exchangeData(Payment $payment, Shipping $shipping, Customer $customer, Method $method)
    {
        $items = [];
        
        foreach ($payment->getItems() as $item) {
            $items[] = [
                'item' => [
                    'id'           => $item->getId(),
                    'description'  => $item->getDescription(),
                    'amount'       => $item->getAmount(),
                    'quantity'     => $item->getQuantity(),
                    'weight'       => $item->getWeight(),
                    'shippingCost' => $item->getShippingCost(),
                ],
            ];
        }
        
        $data = [
            'currency'    => $payment->getCurrency(),
            'redirectURL' => $payment->getRedirectURL(),
            'reference'   => $payment->getReference(),
            'sender'      => [
                'name'      => $customer->getName(),
                'email'     => $customer->getEmail(),
                'ip'        => $customer->getIp(),
                'phone'     => [
                    'areaCode' => $customer->getPhone()->getAreaCode(),
                    'number'   => $customer->getPhone()->getNumber(),
                ],
                'documents' => [
                    'document' => [
                        'type'  => Documents::CPF,
                        'value' => $customer->getDocuments()->getItem(Documents::CPF),
                    ],
                ],
            ],
            'items'       => $items,
            'shipping'    => [
                'addressRequired' => $shipping->getAddressRequired(),
            ],
            'receiver'    => [
                'email' => $payment->getReceiveEmail(),
            ],
        ];
        
        $this->data = ArrayToXml::convert($data, 'checkout');
        
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
        $response = new Response($this->env, 'Payment');
        
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