<?php

namespace PagSeguro\Contracts;

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
interface Phone
{
    /**
     * Get code
     * 
     * @return string
     */
    public function getAreaCode() : string;

    /**
     * Set code
     * 
     * @param string $code
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setAreaCode(string $area_code);

    /**
     * Get number
     * 
     * @return string
     */
    public function getNumber() : string;

    /**
     * Set number
     * 
     * @param string $number
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return string
     */
    public function setNumber(string $number);
    
    /**
     * To string phone
     * 
     * @param bool $mask
     * @return string
     */
    public function toString(bool $mask = true) : string;
}