<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Shipping\Type;

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