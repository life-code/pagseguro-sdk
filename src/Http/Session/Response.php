<?php

namespace PagSeguro\Http\Session;

use PagSeguro\Http\Response as BaseResponse;

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
class Response extends BaseResponse
{
    /**
     * Set data
     * 
     * @return $this
     */
    public function setData($data)
    {
        $this->data = json_decode(json_encode(simplexml_load_string($data)));
        
        return $this;
    }
}