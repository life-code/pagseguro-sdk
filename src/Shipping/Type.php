<?php

namespace PagSeguro\Shipping;

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
class Type implements TypeContract
{
    /**
     * @var int
     */
    const TYPE_PAC = 1;
    
    /**
     * @var int
     */
    const TYPE_SEDEX = 2;
    
    /**
     * @var int
     */
    const TYPE_UNKNOWN = 3;
    
    /**
     * Check type exists
     * 
     * @param string $type
     * @return bool
     */
    public static function check(string $type) : bool
    {
        return in_array((int) $type, self::getTypes());
    }
    
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes() : array
    {
        return [
            self::TYPE_PAC, 
            self::TYPE_SEDEX, 
            self::TYPE_UNKNOWN
        ];
    }
}