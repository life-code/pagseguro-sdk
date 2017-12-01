<?php

namespace PagSeguro\Contracts\PreApprovals;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
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
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create();
}