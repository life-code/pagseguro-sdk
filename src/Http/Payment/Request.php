<?php

namespace PagSeguro\Http\Payment;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Payment\Response;
use PagSeguro\Payment\Payment;
use PagSeguro\Contracts\Documents;
use PagSeguro\Contracts\Customer;
use PagSeguro\Payment\Method;

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
            'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1',
        ];
    }
    
    /**
     * Exchange data
     * 
     * @param \PagSeguro\PreApprovals\Payment $payment
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Payment\Method $method
     * @return $this
     */
    public function exchangeData(Payment $payment, Customer $customer, Method $method)
    {
        $items = [];
        
        foreach ($payment->getItems() as $item) {
            $items[] = [
                'id'          => $item->getId(),
                'description' => $item->getDescription(),
                'amount'      => $item->getAmount(),
                'quantity'    => $item->getQuantity(),
            ];
        }
        
        $this->data = [
            'mode'            => $payment->getMode(),
            'currency'        => $payment->getCurrency(),
            'notificationURL' => $payment->getNotificationURL(),
            'receiverEmail'   => $payment->getReceiveEmail(),
            'reference'       => $payment->getReference(),
            'sender'          => [
                'name'      => $customer->getName(),
                'email'     => $customer->getEmail(),
                'hash'      => $customer->getHash(),
                'ip'        => $customer->getIp(),
                'phone'     => [
                    'areaCode' => $customer->getPhone()->getAreaCode(),
                    'number'   => $customer->getPhone()->getNumber(),
                ],
                'address'   => [
                    'street'     => $customer->getAddress()->getStreet(),
                    'number'     => $customer->getAddress()->getNumber(),
                    'complement' => $customer->getAddress()->getComplement(),
                    'district'   => $customer->getAddress()->getDistrict(),
                    'city'       => $customer->getAddress()->getCity(),
                    'state'      => $customer->getAddress()->getState(),
                    'country'    => $customer->getAddress()->getCountry(),
                    'postalCode' => $customer->getAddress()->getCep(),
                ],
                'documents' => [
                    [
                        'type'  => Documents::CPF,
                        'value' => $customer->getDocuments()->getItem(Documents::CPF),
                    ]
                ],
            ],
            'items'           => $items,
            'method'          => $method->getType(),
            'creditCard'      => [
                'token'       => $method->getCreditCard()->getToken(),
                'installment' => [
                    'quantity'                      => $method->getCreditCard()->getInstallment()->getQuantity(),
                    'noInterestInstallmentQuantity' => $method->getCreditCard()->getInstallment()->getNoInterestInstallmentQuantity(),
                    'value'                         => $method->getCreditCard()->getInstallment()->getValue(),
                ],
                'holder'      => [
                    'name'      => $method->getCreditCard()->getHolder()->getName(),
                    'birthDate' => $method->getCreditCard()->getHolder()->getBirthDate(),
                    'documents' => [
                        [
                            'type'  => Documents::CPF,
                            'value' => $method->getCreditCard()->getHolder()->getDocuments()->getItem(Documents::CPF),
                        ]
                    ],
                    'phone'     => [
                        'areaCode' => $method->getCreditCard()->getHolder()->getPhone()->getAreaCode(),
                        'number'   => $method->getCreditCard()->getHolder()->getPhone()->getNumber(),
                    ],
                ],
            ],
        ];
        
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
        $response = new Response($this->env);
        
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