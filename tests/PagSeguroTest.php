<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\PreApprovals\PreApproval;

class PagSeguroTest extends TestCase
{
    /**
     * Test version
     *
     * @return void
     */
    public function testVersion()
    {
        $this->assertEquals('0.8.4', PagSeguro::version());
    }
    
    /**
     * Test instance session
     *
     * @return void
     */
    public function testSession()
    {
        $this->assertInstanceOf(Session::class, PagSeguro::session());
    }
    
    /**
     * Test instance session
     *
     * @return void
     */
    public function testPreApproval()
    {
        $this->assertInstanceOf(PreApproval::class, PagSeguro::preApproval());
    }
}