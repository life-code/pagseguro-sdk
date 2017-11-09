<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Customer\Customer;
use PagSeguro\Contracts\Customer as CustomerContract;

use PagSeguro\Customer\Phone;
use PagSeguro\Contracts\Phone as PhoneContract;

use PagSeguro\Customer\Address;
use PagSeguro\Contracts\Address as AddressContract;

use PagSeguro\Customer\Documents;
use PagSeguro\Contracts\Documents as DocumentsContract;

use PagSeguro\Exceptions\PagseguroException;

class CustomerTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PagSeguro\Contracts\Customer
     */
    public static function instance()
    {
        return new Customer();
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
     * Address Instance
     * 
     * @return \PagSeguro\Contracts\Address
     */
    public static function addressInstance()
    {
        return new Address();
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
        $this->assertInstanceOf(CustomerContract::class, $this->instance());
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
     * Test get email
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setEmail('vinicius_puglies@outlook.com')->getEmail());
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
     * Test set name
     *
     * @return void
     */
    public function testSetName()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setName('Vinicius Pugliesi'));
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
     * Test set IP
     *
     * @return void
     */
    public function testSetIp()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setIp('191.13.60.30'));
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
     * Test set hash
     *
     * @return void
     */
    public function testSetHash()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setHash('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs'));
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
     * Test set phone
     *
     * @return void
     */
    public function testSetPhone()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setPhone($this->phoneInstance()));
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
     * Test set address
     *
     * @return void
     */
    public function testSetAddress()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setAddress($this->addressInstance()));
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
     * Test set documents
     *
     * @return void
     */
    public function testSetDocuments()
    {
        $this->assertInstanceOf(CustomerContract::class, $this->instance()->setDocuments($this->documentsInstance()));
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
}