<?php

namespace PagSeguro\Http\PreApprovals;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\PreApprovals\Response;
use PagSeguro\Contracts\PreApprovals\PreApproval;
use PagSeguro\Contracts\Documents;
use PagSeguro\Contracts\Customer;
use PagSeguro\Contracts\Payment\Method;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.92
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
        return $this->env->getUrl() . 'pre-approvals?' . $this->credentials->toString();
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
            'Content-Type: ' . self::JSON,
            'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1',
        ];
    }
    
    /**
     * Exchange data
     * 
     * @param \PagSeguro\Contracts\PreApprovals\PreApproval $pre_approval
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Contracts\Payment\Method $method
     * @return $this
     */
    public function exchangeData(PreApproval $pre_approval, Customer $customer, Method $method)
    {
        $data = [
            'plan'          => $pre_approval->getPlan(),
            'reference'     => $pre_approval->getReference(),
            'sender'        => [
                'name'      => $customer->getName(),
                'email'     => $customer->getEmail(),
                'hash'      => $customer->getHash(),
                'phone'     => [
                    'areaCode' => $customer->getPhone()->getAreaCode(),
                    'number' => $customer->getPhone()->getNumber(),
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
            'paymentMethod' => [
                'type'       => $method->getType(),
                'creditCard' => [
                    'token'  => $method->getCreditCard()->getToken(),
                    'holder' => [
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
                            'number' => $method->getCreditCard()->getHolder()->getPhone()->getNumber(),
                        ],
                    ],
                ],
            ],
        ];
        
        $this->data = json_encode($data);
        
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
        $response = new Response($this->env, 'PreApprovals');
        
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