<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Customer as CustomerContract;
use PagSeguro\Customer\Customer;
use PagSeguro\Exceptions\PagseguroException;

class CustomerTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PagSeguro\Contracts\Customer
     */
    public function instance()
    {
        return new Customer();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance());
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testSetEmail()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setEmail('vinicius_puglies@outlook.com')->getEmail());
    }
    
    /**
     * Test instance
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testTrowSetEmail()
    {
        $this->instance()->setEmail('vinicius_puglies');
    }
}