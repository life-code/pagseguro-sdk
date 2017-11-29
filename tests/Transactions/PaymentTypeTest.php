<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Type;

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
class PaymentTypeTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(Type::check(Type::CREDITCARD));
        $this->assertTrue(! Type::check('CREDIT'));
    }
    
    /**
     * Test get type
     *
     * @return void
     */
    public function testGetTypes()
    {
        $this->assertCount(3, Type::getTypes());
    }
}