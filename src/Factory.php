<?php

namespace Pagseguro;

use Pagseguro\Pagseguro;

class Factory
{
    /**
     * @var \Pagseguro\Pagseguro
     */ 
    private static $pagseguro;
    
    /**
     * Handles pagseguro instance
     * 
     * @return \Pagseguro\Pagseguro
     */ 
    public static function make()
    {
        if (!self::$pagseguro) {
            self::$pagseguro = new Pagseguro();
        }
        
        return self::$pagseguro;
    }
}
