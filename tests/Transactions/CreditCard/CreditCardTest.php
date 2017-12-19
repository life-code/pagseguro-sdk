<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\CreditCard\CreditCard;
use PagSeguro\Contracts\Transactions\CreditCard\CreditCard as CreditCardContract;
use PagSeguro\Transactions\CreditCard\Holder;

use PagSeguro\Common\Address;
use PagSeguro\Contracts\Common\Address as AddressContract;

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
class CreditCardTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\CreditCard
     */
    public function instance()
    {
        return new CreditCard();
    }
    
    /**
     * Address Instance
     * 
     * @return \PagSeguro\Contracts\Common\Address
     */
    public static function addressInstance()
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
        $this->assertInstanceOf(CreditCardContract::class, $this->instance());
    }
    
    /**
     * Test get token
     *
     * @return void
     */
    public function testGetToken()
    {
        $this->assertEquals(
            '$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy', 
            $this->instance()->setToken('$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy')->getToken()
        );
    }
    
    /**
     * Test set token
     *
     * @return void
     */
    public function testSetToken()
    {
        $this->assertInstanceOf(
            CreditCardContract::class, 
            $this->instance()->setToken('$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy')
        );
    }
    
    /**
     * Test get holder
     *
     * @return void
     */
    public function testGetHolder()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setHolder(new Holder())->getHolder());
    }
    
    /**
     * Test set holder
     *
     * @return void
     */
    public function testSetHolder()
    {
        $this->assertInstanceOf(CreditCardContract::class, $this->instance()->setHolder(new Holder()));
    }
    
    /**
     * Test get address
     *
     * @return void
     */
    public function testGetAddress()
    {
        $this->assertInstanceOf(AddressContract::class, $this->instance()->setAddress($this->addressInstance())->getAddress());
    }
    
    /**
     * Test set address
     *
     * @return void
     */
    public function testSetAddress()
    {
        $this->assertInstanceOf(CreditCardContract::class, $this->instance()->setAddress($this->addressInstance()));
    }
}