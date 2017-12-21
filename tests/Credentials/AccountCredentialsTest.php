<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\AccountCredentials as AccountCredentialsContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class AccountCredentialsTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    public static function instance()
    {
        return new AccountCredentials();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(AccountCredentials::class, $this->instance());
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
        $this->assertInstanceOf(AccountCredentialsContract::class, $this->instance()->setEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test throw set email
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetEmail()
    {
        $this->instance()->setEmail('vinicius_puglies');
    }
    
    /**
     * Test get token
     *
     * @return void
     */
    public function testGetToken()
    {
        $this->assertEquals('A6S54651GF3A5SDFA6SG54312SADF5FW', $this->instance()->setToken('A6S54651GF3A5SDFA6SG54312SADF5FW')->getToken());
    }
    
    /**
     * Test set token
     *
     * @return void
     */
    public function testSetToken()
    {
        $this->assertInstanceOf(AccountCredentialsContract::class, $this->instance()->setToken('A6S54651GF3A5SDFA6SG54312SADF5FW'));
    }
    
    /**
     * Test throw set token
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetToken()
    {
        $this->instance()->setToken('A6S54651GF3A5SDFA6SG54312SADF');
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
    
    /**
     * Test to string
     *
     * @return void
     */
    public function testToString()
    {
        $this->assertRegExp('/email=*.+&token.+/', $this->instance()->toString());
    }
}