<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Response as ResponseContract;
use PagSeguro\Contracts\Credentials\Environment;

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
abstract class Response implements ResponseContract
{
    /**
     * @var int
     */
    protected $status = 0;
    
    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * @var array
     */
    protected $info = [];
    
    /**
     * @var array
     */
    protected $errors = [];
    
    /**
     * @var \PagSeguro\Contracts\Credentials\Environment
     */
    protected $env;
    
    /**
     * @var string
     */
    private $transation;
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(Environment $env, string $transation)
    {
        $this->env        = $env;
        $this->transation = $transation;
    }
    
    /**
     * Get status
     * 
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    
    /**
     * Set status
     * 
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
        
        return $this;
    }
    
    /**
     * Get all data
     * 
     * @return object
     */
    public function all()
    {
        return $this->data;
    }
    
    /**
     * Get all to array data
     * 
     * @return array
     */
    public function toArray() : array
    {
        return toArrayRecursive($this->data);
    }
    
    /**
     * Get info
     * 
     * @return array
     */
    public function getInfo() : array
    {
        return $this->info;
    }
    
    /**
     * Set info
     * 
     * @param array $info
     * @return array
     */
    public function setInfo(array $info)
    {
        $this->info = $info;
        
        return $this;
    }
    
    /**
     * Get errors
     * 
     * @return \PagSeguro\Contracts\Http\ErrorBag
     */
    public function getErrors()
    {
        return $this->errors;
    }
    
    /**
     * Has errors
     * 
     * @return bool
     */
    public function hasErrors() : bool
    {
        return $this->getErrors() ? true : false;
    }
    
    /**
     * Set errors
     * 
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        if (!$this->errors) {
            $this->errors = new ErrorBag($this->env, $this->transation);
        }
        
        $this->errors->setData($errors);
        
        return $this;
    }

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
        return $this->data->$key;
    }

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    public function __set(string $key, $value)
    {
        $this->data->$key = $value;
        
        return $this;
    }

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @return json
     */
    public function __toString()
    {
        return json_encode($this->data);
    }
}