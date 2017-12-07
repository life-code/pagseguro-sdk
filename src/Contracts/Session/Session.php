<?php

namespace PagSeguro\Contracts\Session;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Session
{
    /**
     * Create Session ID
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create();
}