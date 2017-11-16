<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Shipping;

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
}