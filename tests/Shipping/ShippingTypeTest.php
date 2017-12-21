<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Type;

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
class ShippingTypeTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(Type::check(Type::TYPE_SEDEX));
        $this->assertTrue(! Type::check(10));
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