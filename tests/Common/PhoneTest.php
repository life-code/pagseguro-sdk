<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Common\Phone as PhoneContract;
use PagSeguro\Common\Phone;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PhoneTest extends TestCase
{
    /**
     * Phone Instance
     * 
     * @return \PagSeguro\Contracts\Common\Phone
     */
    public function instance()
    {
        return new Phone();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(PhoneContract::class, $this->instance());
    }
    
    /**
     * Test instance with parameters
     *
     * @return void
     */
    public function testInstanceWithParameters()
    {
        $instance = new Phone('82', '28634136');
        
        $this->assertInstanceOf(PhoneContract::class, $instance);
        $this->assertEquals('82', $instance->getAreaCode());
        $this->assertEquals('28634136', $instance->getNumber());
        $this->assertCount(2, $instance->toArray());
    }
    
    /**
     * Test get area code
     *
     * @return void
     */
    public function testGetAreaCode()
    {
        $this->assertEquals('82', $this->instance()->setAreaCode('82')->getAreaCode());
    }
    
    /**
     * Test set area code
     *
     * @return void
     */
    public function testSetAreaCode()
    {
        $this->assertInstanceOf(PhoneContract::class, $this->instance()->setAreaCode('82'));
    }
    
    /**
     * Test throw set area code
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetAreaCode()
    {
        $this->instance()->setAreaCode('134');
        $this->instance()->setAreaCode('1');
    }
    
    /**
     * Test get number
     *
     * @return void
     */
    public function testGetNumber()
    {
        $this->assertEquals('28634136', $this->instance()->setNumber('28634136')->getNumber());
    }
    
    /**
     * Test set number
     *
     * @return void
     */
    public function testSetNumber()
    {
        $this->assertInstanceOf(PhoneContract::class, $this->instance()->setNumber('28634136'));
    }
    
    /**
     * Test throw set number
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetNumber()
    {
        $this->instance()->setNumber('9972134');
        $this->instance()->setNumber('2863413654');
    }
    
    /**
     * Test to array
     * 
     * @return void
     */
    public function testToArray()
    {
        $this->assertCount(2, $this->instance()->toArray());
    }
    
    /**
     * Test to string
     *
     * @return void
     */
    public function testToString()
    {
        $this->assertEquals('(82) 2863-4136', $this->instance()->setAreaCode('82')->setNumber('28634136')->toString());
        $this->assertEquals('(82) 98653-8036', $this->instance()->setAreaCode('82')->setNumber('986538036')->toString());
        $this->assertEquals('2863-4136', $this->instance()->setNumber('28634136')->toString());
        $this->assertEquals('98653-8036', $this->instance()->setNumber('986538036')->toString());
        $this->assertEquals('8228634136', $this->instance()->setAreaCode('82')->setNumber('28634136')->toString(false));
    }
}