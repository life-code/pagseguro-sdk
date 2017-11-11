<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\Method;

class MethodTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\Method
     */
    public function instance()
    {
        return new Method();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testinstance()
    {
        $this->assertInstanceOf(Method::class, $this->instance());
    }
    
    /**
     * Test get Type
     *
     * @return void
     */
    public function testGetType()
    {
        $this->assertEquals('CREDITCARD', $this->instance()->setType('CREDITCARD')->getType());
    }
    
    /**
     * Test set Type
     *
     * @return void
     */
    public function testSetType()
    {
        $this->assertInstanceOf(Method::class, $this->instance()->setType('CREDITCARD'));
    }
}