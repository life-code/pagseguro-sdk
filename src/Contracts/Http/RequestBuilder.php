<?php

namespace PagSeguro\Contracts\Http;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.97
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface RequestBuilder
{
    /**
     * Send request
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function send();
}