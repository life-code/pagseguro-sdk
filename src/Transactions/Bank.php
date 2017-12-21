<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Transactions\Type as TypeContract;

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
class Bank implements TypeContract
{
    /**
     * @var string
     */
	const BANCO_DO_BRASIL = 'BANCO_BRASIL';
	
    /**
     * @var string
     */
	const BANCO_BANRISUL = 'BANRISUL';
	
    /**
     * @var string
     */
	const BRADESCO = 'BRADESCO';
	
    /**
     * @var string
     */
	const ITAU = 'ITAU';
	
    /**
     * Validate bank
     * 
     * @param string $bank
     * @return bool
     */
    public static function check(string $bank) : bool
    {
        return in_array($bank, self::getTypes());
    }
    
    /**
     * Get banks
     * 
     * @return array
     */
    public static function getTypes() : array
    {
        return [
            self::BANCO_DO_BRASIL,
            self::BANCO_BANRISUL,
            self::BRADESCO,
            self::ITAU,
        ];
    }
}