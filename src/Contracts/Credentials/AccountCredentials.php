<?php

namespace PagSeguro\Contracts\Credentials;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.9
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface AccountCredentials
{
    /**
     * Get email
     * 
     * @return string
     */
    public function getEmail() : string;

    /**
     * Set email
     * 
     * @param string $email
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * Get token
     * 
     * @return string
     */
    public function getToken() : string;

    /**
     * Set token
     * 
     * @param string $token
     * @return $this
     */
    public function setToken(string $token);

    /**
     * Get attributes to array
     * 
     * @return array
     */
    public function toArray() : array;

    /**
     * Get attributes to string
     * 
     * @return string
     */
    public function toString() : string;
}