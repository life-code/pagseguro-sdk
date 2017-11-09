<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Phone as PhoneContract;
use PagSeguro\Customer\Phone;
use PagSeguro\Exceptions\PagseguroException;

class PhoneTest extends TestCase
{
    /**
     * Phone Instance
     * 
     * @return \PagSeguro\Contracts\Phone
     */
    public function instance()
    {
        return new Phone();
    }
    
    /**
     * Test set area code
     *
     * @return void
     */
    public function testSetAreaCode()
    {
        $this->assertInstanceOf(PhoneContract::class, $this->instance()->setAreaCode('13'));
    }
    
    /**
     * Test get area code
     *
     * @return void
     */
    public function testGetAreaCode()
    {
        $this->assertEquals('13', $this->instance()->setAreaCode('13')->getAreaCode());
    }
    
    /**
     * Test throw set AreaCode
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetAreaCode()
    {
        $this->instance()->setAreaCode('134');
        $this->instance()->setAreaCode('1');
    }
}