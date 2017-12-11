<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Shipping;
use PagSeguro\Contracts\Common\Address as AddressContract;
use PagSeguro\Common\Address;
use PagSeguro\Shipping\Type;
use PagSeguro\Exceptions\PagSeguroException;

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
class ShippingTest extends TestCase
{
    /**
     * Shipping Instance
     * 
     * @return \PagSeguro\Contracts\Shipping
     */
    public function instance()
    {
        return new Shipping();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Shipping::class, $this->instance());
    }
    
    /**
     * Test get address
     *
     * @return void
     */
    public function testGetAddress()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setAddress(new Address())->getAddress());
    }
    
    /**
     * Test set address
     *
     * @return void
     */
    public function testSetAddress()
    {
        $this->assertInstanceOf(Shipping::class, $this->instance()->setAddress(new Address()));
    }
    
    /**
     * Test get cost
     *
     * @return void
     */
    public function testGetCost()
    {
        $this->assertEquals('100.00', $this->instance()->setCost('100.00')->getCost());
    }
    
    /**
     * Test set cost
     *
     * @return void
     */
    public function testSetCost()
    {
        $this->assertInstanceOf(Shipping::class, $this->instance()->setCost('100.00'));
    }
    
    /**
     * Test get type
     *
     * @return void
     */
    public function testGetType()
    {
        $this->assertEquals(Type::TYPE_PAC, $this->instance()->setType(Type::TYPE_PAC)->getType());
    }
    
    /**
     * Test set type
     *
     * @return void
     */
    public function testSetType()
    {
        $this->assertInstanceOf(Shipping::class, $this->instance()->setType(Type::TYPE_PAC));
    }
    
    /**
     * Test throw set type
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetType()
    {
        $this->assertInstanceOf(Shipping::class, $this->instance()->setType(10));
    }
}