<?php

namespace PagSeguro\Contracts\PreApprovals;

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
interface Cancelation
{
    /**
     * Allows you cancel of a recurrence by the pre approvals code.
     * 
     * @param string $code
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function forCode(string $code);
}