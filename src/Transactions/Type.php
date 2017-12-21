<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Common\Type as TypeContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Type implements TypeContract
{
    /**
     * @var string
     */
	const CREDITCARD = 'creditcard';
	
    /**
     * @var string
     */
	const EFT = 'eft';
	
    /**
     * @var string
     */
	const BOLETO = 'boleto';
	
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
            self::CREDITCARD,
            self::EFT,
            self::BOLETO,
        ];
    }
}