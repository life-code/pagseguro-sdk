<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Type;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.0
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class ShippingTypeTest extends TestCase
{
    /**
     * Test exists
     *
     * @return void
     */
    public function testExists()
    {
        $this->assertTrue(Type::exists(Type::TYPE_SEDEX));
        $this->assertTrue(! Type::exists(10));
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