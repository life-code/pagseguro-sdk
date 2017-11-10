<?php

namespace PagSeguro\Support;

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
trait Language
{
    /**
     * @var string
     */
    const LANG_EN = 'en';
    
    /**
     * @var string
     */
    const LANG_PT = 'pt-bt';
    
    /**
     * Translate error value
     * 
     * @param int $code
     * @param string $value
     * @param string $default
     * @return string
     */
    public function translate(int $code, string $value, string $default = self::LANG_EN) : string
    {
        if ($default === self::LANG_EN) {
            return $value;
        }
        
        return $value;
    }
}