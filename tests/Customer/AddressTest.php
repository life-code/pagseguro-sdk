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
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setState('RS'));
    }
    
    /**
     * Test get state
     *
     * @return void
     */
    public function testGetState()
    {
        $this->assertEquals('RS', $this->instance()->setState('RS')->getState());
    }
    
    /**
     * Test set city
     *
     * @return void
     */
    public function testSetCity()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setCity('Alvorada'));
    }
    
    /**
     * Test get city
     *
     * @return void
     */
    public function testGetCity()
    {
        $this->assertEquals('Alvorada', $this->instance()->setCity('Alvorada')->getCity());
    }
    
    /**
     * Test set cep
     *
     * @return void
     */
    public function testSetCep()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setCep('57040644'));
    }
    
    /**
     * Test get cep
     *
     * @return void
     */
    public function testGetCep()
    {
        $this->assertEquals('57040644', $this->instance()->setCep('57040644')->getCep());
    }
}