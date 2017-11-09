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
     * Test set email
     *
     * @return void
     */
    public function testSetEmail()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test get email
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setEmail('vinicius_puglies@outlook.com')->getEmail());
    }
    
    /**
     * Test throw set email
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetEmail()
    {
        $this->instance()->setEmail('vinicius_puglies');
    }
    
    /**
     * Test set name
     *
     * @return void
     */
    public function testSetName()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setName('Vinicius Pugliesi'));
    }
    
    /**
     * Test get name
     *
     * @return void
     */
    public function testGetName()
    {
        $this->assertEquals('Vinicius Pugliesi', $this->instance()->setName('Vinicius Pugliesi')->getName());
    }
    
    /**
     * Test throw set name
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetName()
    {
        $this->instance()->setName('Vinicius');
    }
    
    /**
     * Test set IP
     *
     * @return void
     */
    public function testSetIp()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setIp('191.13.60.30'));
    }
    
    /**
     * Test get IP
     *
     * @return void
     */
    public function testGetIp()
    {
        $this->assertEquals('191.13.60.30', $this->instance()->setIp('191.13.60.30')->getIp());
    }
    
    /**
     * Test set hash
     *
     * @return void
     */
    public function testSetHash()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setHash('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs'));
    }
    
    /**
     * Test get hash
     *
     * @return void
     */
    public function testGetHash()
    {
        $this->assertEquals(
            'Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs', 
            $this->instance()->setHash('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs')->getHash()
        );
    }
}