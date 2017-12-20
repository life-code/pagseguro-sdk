<?php

namespace PagSeguro\Contracts\Credentials;

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
interface Environment
{
    /**
     * Get environment
     * 
     * @return string
     */
    public function getEnv() : string;

    /**
     * Get email
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getEmail() : string;

    /**
     * Get token
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getToken() : string;

    /**
     * Get URL
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getUrl() : string;
    
    /**
     * Get replace
     * 
     * @return string
     */
    public function getReplace() : string;
    
    /**
     * Get location
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getLocation() : string;
}