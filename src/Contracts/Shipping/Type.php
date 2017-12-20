<?php

namespace PagSeguro\Contracts\Shipping;

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
interface Type
{
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes() : array;
    
    /**
     * Check type exists
     * 
     * @param int $type
     * @return bool
     */
    public static function exists(int $type) : bool;
}