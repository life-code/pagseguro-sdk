<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\CreditCard\CreditCard;

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
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(CreditCard::class, $this->instance());
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
            CreditCard::class, 
            $this->instance()->setToken('$2y$10$fTMKmH8fmR9wUa0x35norOY46Y86T7wwsVz/0FwC7B33T.87WaFAy')
        );
    }
}