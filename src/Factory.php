<?php

namespace PagSeguro;

use PagSeguro\PagSeguro;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Factory
{
    /**
     * @var \PagSeguro\PagSeguro
     */ 
    private static $pagseguro;
    
    /**
     * Handles pagseguro instance
     * 
     * @return \PagSeguro\PagSeguro
     */ 
    public static function make()
    {
        if (!self::$pagseguro) {
            self::$pagseguro = new PagSeguro();
        }
        
        return self::$pagseguro;
    }
}
