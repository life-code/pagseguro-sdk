<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\Method;
use PagSeguro\Payment\CreditCard\CreditCard;

class MethodTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\Method
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
    public function testinstance()
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
        $this->assertEquals('CREDITCARD', $this->instance()->setType('CREDITCARD')->getType());
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
        $this->assertInstanceOf(Method::class, $this->instance()->setType('CREDITCARD'));
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