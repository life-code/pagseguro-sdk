<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\PaymentMode;

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
class PaymentModeTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(PaymentMode::check(PaymentMode::DEFAULT));
        $this->assertTrue(! PaymentMode::check('BRASIL'));
    }
    
    /**
     * Test get payment modes
     *
     * @return void
     */
    public function testGetPaymentModes()
    {
        $this->assertCount(1, PaymentMode::getTypes());
    }
}