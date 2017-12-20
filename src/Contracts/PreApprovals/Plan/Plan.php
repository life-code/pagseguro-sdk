<?php

namespace PagSeguro\Contracts\PreApprovals\Plan;

use PagSeguro\PreApprovals\Plan\PreApproval;

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
interface Plan
{
    /**
     * Create new plan
     * 
     * @param \PagSeguro\PreApprovals\Plan\PreApproval $pre_approval
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create(PreApproval $pre_approval);
}