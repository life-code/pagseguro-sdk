<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\CreditCard\Holder;

class HolderTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\Holder
     */
    public function instance()
    {
        return new Holder();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Holder::class, $this->instance());
    }
}