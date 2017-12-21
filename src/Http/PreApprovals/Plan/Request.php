<?php

namespace PagSeguro\Http\PreApprovals\Plan;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\PreApprovals\Plan\Response;
use PagSeguro\Contracts\PreApprovals\Plan\PreApproval;
use PagSeguro\PreApprovals\Plan;

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
        return $this->env->getUrl() . '/pre-approvals/request/' . $this->getCode() . '?' . $this->credentials->toString();
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
     * @param \PagSeguro\Contracts\PreApprovals\Plan $plan
     * @param \PagSeguro\Contracts\PreApprovals\Plan\PreApproval $pre_approval
     * @return $this
     */
    public function exchangeData(Plan $plan, PreApproval $pre_approval)
    {
        $data = [
        	'redirectURL': $plan->getRedirectURL(),
        	'reference': $plan->getReference(),
        	'reviewURL': $plan->getReviewURL(),
        	'maxUses': $plan->getMaxUses(),
        	'preApproval': $pre_approval->toArray(),
        	'receiver': [
        	    'email': $plan->getReceiverEmail(),
        	],
        ];
        
        $this->data = json_encode($data);
        
        return $this;
    }
}