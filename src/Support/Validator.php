<?php

namespace PagSeguro\Support;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.95
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
trait Validator
{
    /**
     * Validate email
     * 
     * @param string $email
     * @return bool
     */ 
    private function validateEmail(string $email) : bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    /**
     * Validate URL
     * 
     * @param string $url
     * @return bool
     */ 
    private function validateUrl(string $url) : bool
    {
        return filter_var($email, FILTER_VALIDATE_URL);
    }
    
    /**
     * Validate JSON
     * 
     * @param mixed $data
     * @return bool
     */ 
    private function isJSON($data) : bool
    {
        json_decode($data);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}