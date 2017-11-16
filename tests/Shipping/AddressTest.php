<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Address as AddressContract;
use PagSeguro\Shipping\Address;
use PagSeguro\Exceptions\PagseguroException;

class AddressTest extends TestCase
{
    /**
     * Address Instance
     * 
     * @return \PagSeguro\Contracts\Address
     */
    public function instance()
    {
        return new Address();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance());
    }
}