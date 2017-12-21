<?php

namespace PagSeguro\Contracts\Http;

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
interface Response
{
    /**
     * Get status
     * 
     * @return int
     */
    public function getStatus() : int;
    
    /**
     * Set status
     * 
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status);
    
    /**
     * Get all data
     * 
     * @return object
     */
    public function all();
    
    /**
     * Get all to array data
     * 
     * @return array
     */
    public function toArray() : array;
    
    /**
     * Get error
     * 
     * @return \PagSeguro\Contracts\Http\ErrorBag
     */
    public function getErrors();
    
    /**
     * Has errors
     * 
     * @return bool
     */
    public function hasErrors() : bool;
    
    /**
     * Set error
     * 
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors);
    
    /**
     * Get info
     * 
     * @return array
     */
    public function getInfo() : array;
    
    /**
     * Set info
     * 
     * @param array $info
     * @return array
     */
    public function setInfo(array $info);
    
    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key);

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    public function __set(string $key, $value);

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @return json
     */
    public function __toString();
}