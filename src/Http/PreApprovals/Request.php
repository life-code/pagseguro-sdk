<?php

namespace PagSeguro\Http\PreApprovals;

use PagSeguro\Contracts\PreApprovals\PreApproval;
use PagSeguro\Contracts\Customer\Customer;
use PagSeguro\Contracts\Transactions\Method;
use PagSeguro\Common\Documents;
use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\PreApprovals\Response;

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
     * Get response class
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function getResponseClass()
    {
        return new Response($this->env, 'PreApprovals');
    }
    
    /**
     * Exchange data
     * 
     * @param \PagSeguro\Contracts\PreApprovals\PreApproval $pre_approval
     * @param \PagSeguro\Contracts\Customer\Customer $customer
     * @param \PagSeguro\Contracts\Transactions\Method $method
     * @return $this
     */
    public function exchangeData(PreApproval $pre_approval, Customer $customer, Method $method)
    {
        $data = [
            'plan'          => $pre_approval->getPlan(),
            'reference'     => $pre_approval->getReference(),
            'sender'        => $customer->toArray(),
            'paymentMethod' => [
                'type'       => $method->getType(),
                'creditCard' => [
                    'token'  => $method->getCreditCard()->getToken(),
                    'holder' => $method->getCreditCard()->getHolder()->toArray(),
                ],
            ],
        ];
        
        $this->data = json_encode($data);
        
        return $this;
    }
}