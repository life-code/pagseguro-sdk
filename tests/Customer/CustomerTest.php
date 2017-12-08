<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Customer\Customer;
use PagSeguro\Contracts\Customer\Customer as CustomerContract;

use PagSeguro\Common\Phone;
use PagSeguro\Contracts\Common\Phone as PhoneContract;

use PagSeguro\Common\Address;
use PagSeguro\Contracts\Common\Address as AddressContract;

use PagSeguro\Common\Documents;
use PagSeguro\Contracts\Common\Documents as DocumentsContract;

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
class CustomerTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PagSeguro\Contracts\Customer\Customer
     */
    public static function instance()
    {
        return new Customer();
    }
    
    /**
     * Phone Instance
     * 
     * @return \PagSeguro\Contracts\Common\Phone
     */
    public static function phoneInstance()
    {
        return new Phone();
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
     * Documents Instance
     * 
     * @return \PagSeguro\Contracts\Common\Documents
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance());
    }
    
    /**
     * Test get email
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setEmail('vinicius_puglies@outlook.com')->getEmail());
    }
    
    /**
     * Test set email
     *
     * @return void
     */
    public function testSetEmail()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test throw set email
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetEmail()
    {
        $this->instance()->setEmail('vinicius_puglies');
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setName('Vinicius Pugliesi'));
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
     * Test get IP
     *
     * @return void
     */
    public function testGetIp()
    {
        $this->assertEquals('191.13.60.30', $this->instance()->setIp('191.13.60.30')->getIp());
    }
    
    /**
     * Test set IP
     *
     * @return void
     */
    public function testSetIp()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setIp('191.13.60.30'));
    }
    
    /**
     * Test throw set IP
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetIp()
    {
        $this->instance()->setIp('191136030');
    }
    
    /**
     * Test get hash
     *
     * @return void
     */
    public function testGetHash()
    {
        $this->assertEquals(
            'Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs', 
            $this->instance()->setHash('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs')->getHash()
        );
    }
    
    /**
     * Test set hash
     *
     * @return void
     */
    public function testSetHash()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setHash('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs'));
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setPhone($this->phoneInstance()));
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setAddress($this->addressInstance()));
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setDocuments($this->documentsInstance()));
    }
}