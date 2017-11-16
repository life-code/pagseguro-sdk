<?php

namespace PagSeguro\Contracts\PreApprovals;

use PagSeguro\Contracts\Customer;
use PagSeguro\Payment\Method;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.91
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface PreApproval
{
    /**
     * Get plan
     * 
     * @return string
     */
    public function getPlan() : string;

    /**
     * Set plan
     * 
     * @param string $plan
     * @return $this
     */
    public function setPlan(string $plan);

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
     * Approves one payment
     * 
     * @param \PagSeguro\Contracts\Customer $customer
     * @param \PagSeguro\Payment\Method $method
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function approve(Customer $customer, Method $method);
}