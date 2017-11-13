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
}