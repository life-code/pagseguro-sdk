<?php

namespace PagSeguro\Payment;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.5
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Type
{
    /**
     * @var string
     */ 
	const CREDITCARD = 'CREDITCARD';
	
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */ 
    public static function check(string $type) : bool
    {
        return in_array($type, self::getTypes());
    }
    
    /**
     * Get types
     * 
     * @return array
     */ 
    public static function getTypes()
    {
        return [
            self::CREDITCARD,
        ];
    }
}