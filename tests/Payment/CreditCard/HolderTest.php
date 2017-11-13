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
     * Test set name
     *
     * @return void
     */
    public function testSetName()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setName('Vinicius Pugliesi'));
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
}