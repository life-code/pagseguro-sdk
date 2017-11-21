<?php

namespace PagSeguro\Shipping;

use PagSeguro\Contracts\Shipping\Type as TypeContract;

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
    
    /**
     * Check type exists
     * 
     * @param int $type
     * @return bool
     */
    public static function exists(int $type) : bool
    {
        return in_array($type, self::getTypes());
    }
}