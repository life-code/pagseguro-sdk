<?php

namespace PagSeguro\Languages;

use PagSeguro\Contracts\Common\Type as TypeContract;

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
class Location implements TypeContract
{
    /**
     * @var string
     */
	const EN = 'en';
	
    /**
     * @var string
     */
	const PT_BR = 'pt-br';
	
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
    public static function getTypes() : array
    {
        return [
            self::EN,
            self::PT_BR,
        ];
    }
}