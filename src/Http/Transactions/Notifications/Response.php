<?php

namespace PagSeguro\Http\Transactions\Notifications;

use PagSeguro\Http\Response as BaseResponse;

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
class Response extends BaseResponse
{
    /**
     * Set data
     * 
     * @return $this
     */
    public function setData($data)
    {
        $data = json_decode(json_encode(simplexml_load_string($data)));
        
        if (isset($data->error) && $data->error) {
            return $this->setErrors($this->normalizeErrors($data->error));
        }
        
        $this->data = $data;
        
        return $this;
    }
    
    /**
     * Normalize errors
     * 
     * @param mixed $errors
     * @return array
     */
    private function normalizeErrors($errors) : array
    {
        $response = [];
        
        if (isset($errors->code)) {
            $response[$errors->code] = $errors->message;
            
            return $response;
        }
        
        foreach ($errors as $key => $value) {
            $response[$value->code] = $value->message;
        }
        
        return $response;
    }
}