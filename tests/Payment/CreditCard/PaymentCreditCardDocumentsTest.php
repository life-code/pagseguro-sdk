<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Documents as DocumentsContract;
use PagSeguro\Payment\CreditCard\Documents;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.95
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PaymentCreditCardDocumentsTest extends TestCase
{
    /**
     * Documents Instance
     * 
     * @return \PagSeguro\Contracts\Documents
     */
    public function instance()
    {
        return new Documents();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(DocumentsContract::class, $this->instance());
    }
    
    /**
     * Test get item
     *
     * @return void
     */
    public function testGetItem()
    {
        $this->assertEquals(
            '24227052009', 
            $this->instance()->setItem(DocumentsContract::CPF, '24227052009')->getItem(DocumentsContract::CPF)
        );
    }
    
    /**
     * Test set item
     *
     * @return void
     */
    public function testSetItem()
    {
        $this->assertInstanceOf(DocumentsContract::class, $this->instance()->setItem(DocumentsContract::CPF, '24227052009'));
    }
    
    /**
     * Test throw set item
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetItem()
    {
        $this->instance()->setItem('RG', '24227052009');
    }
}