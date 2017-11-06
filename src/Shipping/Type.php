<?php

namespace PagSeguro\Shipping;

class Type
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