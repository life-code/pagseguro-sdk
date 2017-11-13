<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\CreditCard\Holder;

use PagSeguro\Payment\CreditCard\Phone;
use PagSeguro\Contracts\Phone as PhoneContract;

use PagSeguro\Payment\CreditCard\Documents;
use PagSeguro\Contracts\Documents as DocumentsContract;

class HolderTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Payment\Holder
     */
    public function instance()
    {
        return new Holder();
    }
    
    /**
     * Phone Instance
     * 
     * @return \PagSeguro\Contracts\Phone
     */
    public static function phoneInstance()
    {
        return new Phone();
    }
    
    /**
     * Documents Instance
     * 
     * @return \PagSeguro\Contracts\Documents
     */
    public static function documentsInstance()
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
        $this->assertInstanceOf(Holder::class, $this->instance());
    }
    
    /**
     * Test get name
     *
     * @return void
     */
    public function testGetName()
    {
        $this->assertEquals('Vinicius Pugliesi', $this->instance()->setName('Vinicius Pugliesi')->getName());
    }
    
    /**
     * Test set name
     *
     * @return void
     */
    public function testSetName()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setName('Vinicius Pugliesi'));
    }
    
    /**
     * Test throw set name
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetName()
    {
        $this->instance()->setName('Vinicius');
    }
    
    /**
     * Test get birth date
     *
     * @return void
     */
    public function testGetBirthDate()
    {
        $this->assertEquals('17/08/1995', $this->instance()->setBirthDate('17/08/1995')->getBirthDate());
    }
    
    /**
     * Test set birth date
     *
     * @return void
     */
    public function testSetBirthDate()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setBirthDate('17/08/1995'));
    }
    
    /**
     * Test get phone
     *
     * @return void
     */
    public function testGetPhone()
    {
        $this->assertInstanceOf(PhoneContract::class, $this->instance()->setPhone($this->phoneInstance())->getPhone());
    }
    
    /**
     * Test set phone
     *
     * @return void
     */
    public function testSetPhone()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setPhone($this->phoneInstance()));
    }
    
    /**
     * Test get documents
     *
     * @return void
     */
    public function testGetDocuments()
    {
        $this->assertInstanceOf(DocumentsContract::class, $this->instance()->setDocuments($this->documentsInstance())->getDocuments());
    }
    
    /**
     * Test set documents
     *
     * @return void
     */
    public function testSetDocuments()
    {
        $this->assertInstanceOf(Holder::class, $this->instance()->setDocuments($this->documentsInstance()));
    }
}