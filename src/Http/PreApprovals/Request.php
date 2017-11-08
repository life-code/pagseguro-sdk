<?php

namespace PagSeguro\Http\PreApprovals;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\PreApprovals\Response;
use PagSeguro\PreApprovals\PreApproval;
use PagSeguro\Contracts\Documents;

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
     * @param \PagSeguro\PreApprovals\PreApproval $pre_approval
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Payment\Method $method
     * @return $this
     */
    public function exchangeData(PreApproval $pre_approval, Customer $customer, Method $method)
    {
        $this->data = [
            'plan'          => $pre_approval->getPlan(),
            'reference'     => $pre_approval->getHash(),
            'sender'        => [
                'name'      => $customer->getName(),
                'email'     => $customer->getEmail(),
                'hash'      => $customer->getHash(),
                'phone'     => [
                    'areaCode' => $customer->getPhone()->getCode(),
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
                        'value' => $customer->getPayment()->getDocuments()->getItem(Documents::CPF),
                    ]
                ],
            ],
            'paymentMethod' => [
                'type'       => $method->getType(),
                'creditCard' => [
                    'token'  => $method->getToken(),
                    'holder' => [
                        'name'      => $method->getHolder()->getName(),
                        'birthDate' => $method->getHolder()->getBirthDate(),
                        'documents' => [
                            [
                                'type'  => Documents::CPF,
                                'value' => $method->getHolder()->getDocuments()->getItem(Documents::CPF),
                            ]
                        ],
                        'phone'     => [
                            'areaCode' => $method->getHolder()->getPhone()->getCode(),
                            'number' => $method->getHolder()->getPhone()->getNumber(),
                        ],
                    ],
                ],
            ],
        ];
        
        return $this;
    }
}