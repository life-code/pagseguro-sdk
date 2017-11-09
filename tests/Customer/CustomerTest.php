<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Customer as CustomerContract;
use PagSeguro\Customer\Customer;

class CustomerTest extends TestCase
{
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(CustomerContract::class, new Customer());
    }
}