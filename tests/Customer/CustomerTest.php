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
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testSetName()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setName('Vinicius Pugliesi'));
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testGetName()
    {
        $this->assertEquals('Vinicius Pugliesi', $this->instance()->setName('Vinicius Pugliesi')->getName());
    }
    
    /**
     * Test instance
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testTrowSetName()
    {
        $this->instance()->setName('Vinicius');
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testSetIp()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setIp('191.13.60.30'));
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testGetIp()
    {
        $this->assertEquals('191.13.60.30', $this->instance()->setIp('191.13.60.30')->getIp());
    }
}