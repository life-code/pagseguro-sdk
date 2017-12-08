<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Common\Documents as DocumentsContract;
use PagSeguro\Common\Documents;
use PagSeguro\Exceptions\PagseguroException;

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
class DocumentsTest extends TestCase
{
    /**
     * Documents Instance
     * 
     * @return \PagSeguro\Contracts\Common\Documents
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
            $this->instance()->setItem(Documents::CPF, '24227052009')->getItem(Documents::CPF)
        );
    }
    
    /**
     * Test throw get item
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowGetItem()
    {
        $this->instance()->getItem('RG');
    }
    
    /**
     * Test set item
     *
     * @return void
     */
    public function testSetItem()
    {
        $this->assertInstanceOf(DocumentsContract::class, $this->instance()->setItem(Documents::CPF, '24227052009'));
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
    
    /**
     * Test to array
     * 
     * @return void
     */
    public function testToArray()
    {
        $this->assertCount(2, $this->instance()->toArray());
    }
}