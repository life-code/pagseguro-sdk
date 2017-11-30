<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Credentials\Environment;
use PagSeguro\Contracts\Credentials\Environment as EnvironmentContract;

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
class EnvironmentTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PagSeguro\Contracts\Credentials\Environment
     */
    public static function instance()
    {
        return new Environment();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Environment::class, $this->instance());
    }
    
    /**
     * Test get env
     *
     * @return void
     */
    public function testGetEnv()
    {
        $this->assertEquals('SANDBOX', $this->instance()->getEnv());
    }
    
    /**
     * Test get email
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertTrue((bool) $this->instance()->getEmail());
    }
    
    /**
     * Test get token
     *
     * @return void
     */
    public function testGetToken()
    {
        $this->assertTrue((bool) $this->instance()->getToken());
    }
    
    /**
     * Test get URL
     *
     * @return void
     */
    public function testGetUrl()
    {
        $this->assertEquals('https://ws.sandbox.pagseguro.uol.com.br/', $this->instance()->getUrl());
    }
    
    /**
     * Test get replace
     *
     * @return void
     */
    public function testGetReplace()
    {
        $this->assertEquals('sandbox.', $this->instance()->getReplace());
    }
    
    /**
     * Test get location
     *
     * @return void
     */
    public function testGetLocation()
    {
        $this->assertEquals('pt-br', $this->instance()->getLocation());
    }
}