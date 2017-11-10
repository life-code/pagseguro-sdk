<?php

namespace PagSeguro\Languages;

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
    const DEFAULT = 'en';
    
    /**
     * @var string
     */
    const LANG_PT = 'pt-bt';
    
    /**
     * Check type
     * 
     * @param string $type
     * @return bool
     */ 
    public static function check(string $type) : bool
    {
        return in_array($type, self::all());
    }
    
    /**
     * Get all
     * 
     * @return array
     */ 
    public static function all() : array
    {
        return [
            self::DEFAULT,
            self::LANG_PT,
        ];
    }
}