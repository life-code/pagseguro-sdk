<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Address as AddressContract;
use PagSeguro\Customer\Address;
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
     * Test set country
     *
     * @return void
     */
    public function testSetCountry()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setCountry('BRA'));
    }
    
    /**
     * Test get country
     *
     * @return void
     */
    public function testGetCountry()
    {
        $this->assertEquals('BRA', $this->instance()->setCountry('BRA')->getCountry());
    }
    
    /**
     * Test set state
     *
     * @return void
     */
    public function testSetState()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setState('SP'));
    }
    
    /**
     * Test get state
     *
     * @return void
     */
    public function testGetState()
    {
        $this->assertEquals('SP', $this->instance()->setState('SP')->getState());
    }
}