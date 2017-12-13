<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Contracts\Transactions\Payment as PaymentContract;
use PagSeguro\Contracts\Http\Response;

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
class PaymentTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Contracts\Transactions\Payment
     */
    public function instance()
    {
        return PagSeguro::payment();
    }
    
    /**
     * Test instance
     * 
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance());
    }
    
    /**
     * Test get currency
     *
     * @return void
     */
    public function testGetCurrency()
    {
        $this->assertEquals('BRL', $this->instance()->setCurrency('BRL')->getCurrency());
    }
    
    /**
     * Test set currency
     *
     * @return void
     */
    public function testSetCurrency()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setCurrency('BRL'));
    }
    
    /**
     * Test throw set currency
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetCurrency()
    {
        $this->instance()->setCurrency('BR');
    }
    
    /**
     * Test get mode
     *
     * @return void
     */
    public function testGetMode()
    {
        $this->assertEquals('default', $this->instance()->setMode('default')->getMode());
    }
    
    /**
     * Test set mode
     *
     * @return void
     */
    public function testSetMode()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setMode('default'));
    }
    
    /**
     * Test throw set mode
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetMode()
    {
        $this->instance()->setMode('credit');
    }
    
    /**
     * Test get notification URL
     *
     * @return void
     */
    public function testGetNotificationURL()
    {
        $this->assertEquals('http://exemplo.com', $this->instance()->setNotificationURL('http://exemplo.com')->getNotificationURL());
    }
    
    /**
     * Test set notification URL
     *
     * @return void
     */
    public function testSetNotificationURL()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setNotificationURL('http://exemplo.com'));
    }
    
    /**
     * Test throw set notification URL
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetNotificationURL()
    {
        $this->instance()->setNotificationURL('exemplo.com');
    }
}