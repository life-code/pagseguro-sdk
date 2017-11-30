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
interface Notification
{
    /**
     * Allows you to view the data of a recurrence by the notification code.
     * 
     * @param string $code
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function forCode(string $code);
}