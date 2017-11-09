<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\Contracts\Http\Response;

class SessionTest extends TestCase
{
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