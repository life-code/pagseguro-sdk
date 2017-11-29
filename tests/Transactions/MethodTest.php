<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Method;
use PagSeguro\Transactions\CreditCard\CreditCard;
use PagSeguro\Transactions\Type;
use PagSeguro\Transactions\Bank;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.0
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class MethodTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Transactions\Method
     */
    public function instance()
    {
        return new Method();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Method::class, $this->instance());
    }
    
    /**
     * Test get type
     *
     * @return void
     */
    public function testGetType()
    {
        $this->assertEquals(Type::CREDITCARD, $this->instance()->setType(Type::CREDITCARD)->getType());
        $this->assertEquals(Type::EFT, $this->instance()->setType(Type::EFT)->getType());
        $this->assertEquals(Type::BOLETO, $this->instance()->setType(Type::BOLETO)->getType());
    }
    
    /**
     * Test throw set type
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetType()
    {
        $this->instance()->setType('CREDIT');
    }
    
    /**
     * Test set type
     *
     * @return void
     */
    public function testSetType()
    {
        $this->assertInstanceOf(Method::class, $this->instance()->setType(Type::CREDITCARD));
        $this->assertInstanceOf(Method::class, $this->instance()->setType(Type::EFT));
        $this->assertInstanceOf(Method::class, $this->instance()->setType(Type::BOLETO));
    }
    
    /**
     * Test get bank
     *
     * @return void
     */
    public function testGetBank()
    {
        $this->assertEquals(Bank::BANCO_DO_BRASIL, $this->instance()->setBank(Bank::BANCO_DO_BRASIL)->getBank());
        $this->assertEquals(Bank::BANCO_BANRISUL, $this->instance()->setBank(Bank::BANCO_BANRISUL)->getBank());
        $this->assertEquals(Bank::BRADESCO, $this->instance()->setBank(Bank::BRADESCO)->getBank());
        $this->assertEquals(Bank::ITAU, $this->instance()->setBank(Bank::ITAU)->getBank());
    }
    
    /**
     * Test throw set bank
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetBank()
    {
        $this->instance()->setBank('BANCO_DO_BRASIL');
    }
    
    /**
     * Test set bank
     *
     * @return void
     */
    public function testSetBank()
    {
        $this->assertInstanceOf(Method::class, $this->instance()->setBank(Bank::BANCO_DO_BRASIL));
        $this->assertInstanceOf(Method::class, $this->instance()->setBank(Bank::BANCO_BANRISUL));
        $this->assertInstanceOf(Method::class, $this->instance()->setBank(Bank::BRADESCO));
        $this->assertInstanceOf(Method::class, $this->instance()->setBank(Bank::ITAU));
    }
    
    /**
     * Test get credit card
     *
     * @return void
     */
    public function testGetCreditCard()
    {
        $this->assertInstanceOf(
            CreditCard::class, 
            $this->instance()->setCreditCard(new CreditCard())->getCreditCard()
        );
    }
    
    /**
     * Test set credit card
     *
     * @return void
     */
    public function testSetCreditCard()
    {
        $this->assertInstanceOf(
            Method::class, 
            $this->instance()->setCreditCard(new CreditCard())
        );
    }
}