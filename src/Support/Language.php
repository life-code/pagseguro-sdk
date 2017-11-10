<?php

namespace PagSeguro\Support;

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