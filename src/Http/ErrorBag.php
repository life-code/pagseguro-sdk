<?php

namespace Pagseguro\Http;

use PagSeguro\Contracts\Http\ErrorBag as ErrorBagContracts;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Languages\Language;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.92
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class ErrorBag implements ErrorBagContracts
{
    /**
     * @var array
     */
    private $data = [];
    
    /**
     * @var \PagSeguro\Languages\Language
     */
    private $language;
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(Environment $env, string $transation)
    {
        $this->language = new Language($env, $transation);
    }
    
    /**
     * Set data
     * 
     * @param array $errors
     * @return $this
     */
    public function setData(array $errors)
    {
        $exchange = [];
        
        foreach ($errors as $key => $value) {
            $exchange[] = (object) [
                'code'  => $key,
                'value' => $this->language->translate($key, $value),
            ];
        }
        
        $this->data = $exchange;
    }
    
    /**
     * Get first error
     * 
     * @return bool | object
     */
    public function first()
    {
        $values = array_values($this->all());
        
        return $values[0] ?? false;
    }
    
    /**
     * Get last error
     * 
     * @return bool | object
     */
    public function last()
    {
        $values = array_values($this->all());
        
        $reverse = array_reverse($values);
        
        return $reverse[0] ?? false;
    }
    
    /**
     * Check code exists
     * 
     * @param int $code
     * @return bool
     */
    public function codeExists(int $code)
    {
        $values = array_values($this->all());
        
        $codes = array_map(function($item){
            return $item->code;
        }, $values);
        
        return in_array($code, $codes);
    }
    
    /**
     * Get all errors
     * 
     * @return array
     */
    public function all()
    {
        return $this->data;
    }
    
    /**
     * Get all error codes
     * 
     * @return array
     */
    public function allCodes()
    {
        $values = array_values($this->all());
        
        $codes = array_map(function($item){
            return $item->code;
        }, $values);
        
        return $codes;
    }
    
    /**
     * Get all error values
     * 
     * @return array
     */
    public function allValues()
    {
        $values = array_values($this->all());
        
        $values = array_map(function($item){
            return $item->value;
        }, $values);
        
        return $values;
    }
}