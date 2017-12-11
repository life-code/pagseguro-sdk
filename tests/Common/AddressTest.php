<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Common\Address as AddressContract;
use PagSeguro\Common\Address;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class AddressTest extends TestCase
{
    /**
     * Address Instance
     * 
     * @return \PagSeguro\Contracts\Common\Address
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
     * Test set country
     *
     * @return void
     */
    public function testSetCountry()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setCountry('BRA'));
    }
    
    /**
     * Test throw set country
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetCountry()
    {
        $this->instance()->setCountry('USA');
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
     * Test set state
     *
     * @return void
     */
    public function testSetState()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setState('RS'));
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
     * Test set city
     *
     * @return void
     */
    public function testSetCity()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setCity('Alvorada'));
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
     * Test get district
     *
     * @return void
     */
    public function testGetDistrict()
    {
        $this->assertEquals('Jacintinho', $this->instance()->setDistrict('Jacintinho')->getDistrict());
    }
    
    /**
     * Test set district
     *
     * @return void
     */
    public function testSetDistrict()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setDistrict('Jacintinho'));
    }
    
    /**
     * Test get street
     *
     * @return void
     */
    public function testGetStreet()
    {
        $this->assertEquals('Rua Dom João VI', $this->instance()->setStreet('Rua Dom João VI')->getStreet());
    }
    
    /**
     * Test set street
     *
     * @return void
     */
    public function testSetStreet()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setStreet('Rua Dom João VI'));
    }
    
    /**
     * Test get number
     *
     * @return void
     */
    public function testGetNumber()
    {
        $this->assertEquals('155', $this->instance()->setNumber('155')->getNumber());
    }
    
    /**
     * Test set number
     *
     * @return void
     */
    public function testSetNumber()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setNumber('155'));
    }
    
    /**
     * Test get complement
     *
     * @return void
     */
    public function testGetComplement()
    {
        $this->assertEquals('apt. 306', $this->instance()->setComplement('apt. 306')->getComplement());
    }
    
    /**
     * Test set complement
     *
     * @return void
     */
    public function testSetComplement()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setComplement('apt. 306'));
    }
    
    /**
     * Test to array
     * 
     * @return void
     */
    public function testToArray()
    {
        $this->assertCount(8, $this->instance()->toArray());
    }
}