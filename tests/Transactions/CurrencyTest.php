<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Currency;

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
class CurrencyTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(Currency::check(Currency::BR));
        $this->assertTrue(! Currency::check('BRASIL'));
    }
    
    /**
     * Test get currencies
     *
     * @return void
     */
    public function testGetCurrencys()
    {
        $this->assertCount(1, Currency::getTypes());
    }
}