<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Shipping;
use PagSeguro\Shipping\Address;

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
        $this->assertInstanceOf(Address::class, $this->instance()->setAddress(new Address())->getAddress());
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
}