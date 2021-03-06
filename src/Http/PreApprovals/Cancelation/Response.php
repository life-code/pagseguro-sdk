<?php

namespace PagSeguro\Http\PreApprovals\Cancelation;

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
        $data = json_decode($data);
        
        if (isset($data->error) && $data->error) {
            return $this->setErrors((array) $data->errors);
        }
        
        $this->data = $data;
        
        return $this;
    }
}