<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\CreditCard\Installment;
use PagSeguro\Contracts\Transactions\CreditCard\Installment as InstallmentContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class InstallmentTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Transactions\CreditCard\Installment
     */
    public function instance()
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
        $this->assertInstanceOf(InstallmentContract::class, $this->instance());
    }
    
    /**
     * Test get quantity
     *
     * @return void
     */
    public function testGetQuantity()
    {
        $this->assertEquals(1, $this->instance()->setQuantity(1)->getQuantity());
    }
    
    /**
     * Test set quantity
     *
     * @return void
     */
    public function testSetQuantity()
    {
        $this->assertInstanceOf(InstallmentContract::class, $this->instance()->setQuantity(1));
    }
    
    /**
     * Test get no interest installment quantity
     *
     * @return void
     */
    public function testGetNoInterestInstallmentQuantity()
    {
        $this->assertEquals(1, $this->instance()->setNoInterestInstallmentQuantity(1)->getNoInterestInstallmentQuantity());
    }
    
    /**
     * Test set no interest installment quantity
     *
     * @return void
     */
    public function testSetNoInterestInstallmentQuantity()
    {
        $this->assertInstanceOf(InstallmentContract::class, $this->instance()->setNoInterestInstallmentQuantity(1));
    }
    
    /**
     * Test get value
     *
     * @return void
     */
    public function testGetValue()
    {
        $this->assertEquals('1.00', $this->instance()->setValue(1.00)->getValue());
    }
    
    /**
     * Test set value
     *
     * @return void
     */
    public function testSetValue()
    {
        $this->assertInstanceOf(InstallmentContract::class, $this->instance()->setValue(1.00));
    }
}