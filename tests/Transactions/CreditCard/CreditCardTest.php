<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\CreditCard\CreditCard;
use PagSeguro\Contracts\Transactions\CreditCard\CreditCard as CreditCardContract;

use PagSeguro\Transactions\CreditCard\Holder;
use PagSeguro\Contracts\Transactions\CreditCard\Holder as HolderContract;

use PagSeguro\Transactions\CreditCard\Installment;
use PagSeguro\Contracts\Transactions\CreditCard\Installment as InstallmentContract;

use PagSeguro\Common\Address;
use PagSeguro\Contracts\Common\Address as AddressContract;

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
    public function addressInstance()
    {
        return new Address();
    }
    
    /**
     * Holder Instance
     * 
     * @return \PagSeguro\Contracts\Transactions\CreditCard\Holder
     */
    public function holderInstance()
    {
        return new Holder();
    }
    
    /**
     * Installment Instance
     * 
     * @return \PagSeguro\Contracts\Transactions\CreditCard\Installment
     */
    public function installmentInstance()
    {
        return new Installment();
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
     * Test instance with parameters
     *
     * @return void
     */
    public function testInstanceWithParameters()
    {
        $instance = new CreditCard(
            '$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy',
            $this->holderInstance(),
            $this->installmentInstance(),
            $this->addressInstance()
        );
        
        $this->assertInstanceOf(CreditCardContract::class, $instance);
        $this->assertEquals('$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy', $instance->getToken());
        $this->assertInstanceOf(HolderContract::class, $instance->getHolder());
        $this->assertInstanceOf(InstallmentContract::class, $instance->getInstallment());
        $this->assertInstanceOf(AddressContract::class, $instance->getAddress());
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
        $this->assertInstanceOf(HolderContract::class, $this->instance()->setHolder($this->holderInstance())->getHolder());
    }
    
    /**
     * Test set holder
     *
     * @return void
     */
    public function testSetHolder()
    {
        $this->assertInstanceOf(CreditCardContract::class, $this->instance()->setHolder($this->holderInstance()));
    }
    
    /**
     * Test get installment
     *
     * @return void
     */
    public function testGetInstallment()
    {
        $this->assertInstanceOf(InstallmentContract::class, $this->instance()->setInstallment($this->installmentInstance())->getInstallment());
    }
    
    /**
     * Test set installment
     *
     * @return void
     */
    public function testSetInstallment()
    {
        $this->assertInstanceOf(CreditCardContract::class, $this->instance()->setInstallment($this->installmentInstance()));
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