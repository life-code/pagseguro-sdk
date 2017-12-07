<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Transactions\Bank as BankContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Bank implements BankContract
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
        return in_array($bank, self::getBanks());
    }
    
    /**
     * Get banks
     * 
     * @return array
     */
    public static function getBanks()
    {
        return [
            self::BANCO_DO_BRASIL,
            self::BANCO_BANRISUL,
            self::BRADESCO,
            self::ITAU,
        ];
    }
}