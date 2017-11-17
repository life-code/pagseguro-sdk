<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\Type;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.95
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class TypeTest extends TestCase
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
        $this->assertCount(1, Type::getTypes());
    }
}