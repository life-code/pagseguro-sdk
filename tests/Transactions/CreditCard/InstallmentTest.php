<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\CreditCard\Installment;

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
class InstallmentTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\Installment
     */
    public function instance()
    {
        return new Installment();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Installment::class, $this->instance());
    }
}