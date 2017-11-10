<?php

namespace PagSeguro\Contracts\Credentials;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.6
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
     * @return string
     */
    public function getEmail() : string;

    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string;

    /**
     * Get token
     * 
     * @return string
     */
    public function getAppID() : string;

    /**
     * Get token
     * 
     * @return string
     */
    public function getAppKey() : string;

    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl() : string;

    /**
     * Get token
     * 
     * @return string
     */
    public function getScript() : string;
}