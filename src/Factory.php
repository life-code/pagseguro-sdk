<?php

namespace PagSeguro;

use PagSeguro\PagSeguro;

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
