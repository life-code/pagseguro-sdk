<?php

namespace PagSeguro\Contracts\Common;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Type
{
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public static function check(string $type) : bool;
    
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes();
}