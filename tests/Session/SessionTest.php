<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\Contracts\Session\Session as SessionContract;
use PagSeguro\Contracts\Http\Response;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.0
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class SessionTest extends TestCase
{
    /**
     * Test instance
     * 
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(SessionContract::class, PagSeguro::session());
    }
    
    /**
     * Create session
     *
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create()
    {
        return PagSeguro::session()->create();
    }
    
    /**
     * Test create session
     *
     * @return void
     */
    public function testCreate()
    {
        $this->assertInstanceOf(Response::class, $this->create());
    }
    
    /**
     * Test create session and get id
     *
     * @return void
     */
    public function testCreateAndGetId()
    {
        $this->assertTrue($this->create()->id ? true : false);
    }
}