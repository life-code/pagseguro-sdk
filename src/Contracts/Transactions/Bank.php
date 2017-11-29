<?php

namespace PagSeguro\Contracts\Transactions;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.97
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Bank
{
    /**
     * Validate bank
     * 
     * @param string $bank
     * @return bool
     */ 
    public static function check(string $bank) : bool;
    
    /**
     * Get banks
     * 
     * @return array
     */ 
    public static function getBanks();
}