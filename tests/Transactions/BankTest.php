<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Bank;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.97
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class BankTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(Bank::check(Bank::BANCO_DO_BRASIL));
        $this->assertTrue(Bank::check(Bank::BANCO_BANRISUL));
        $this->assertTrue(Bank::check(Bank::BRADESCO));
        $this->assertTrue(Bank::check(Bank::ITAU));
        $this->assertTrue(! Bank::check('BRASIL'));
    }
    
    /**
     * Test get banks
     *
     * @return void
     */
    public function testGetBanks()
    {
        $this->assertCount(4, Bank::getBanks());
    }
}