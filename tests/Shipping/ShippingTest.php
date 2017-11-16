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
}