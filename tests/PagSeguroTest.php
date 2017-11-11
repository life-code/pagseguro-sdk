<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\PreApprovals\PreApproval;
use PagSeguro\PreApprovals\Notification;

class PagSeguroTest extends TestCase
{
    /**
     * Test version
     *
     * @return void
     */
    public function testVersion()
    {
        $this->assertEquals('0.8.7', PagSeguro::version());
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
    
    /**
     * Test instance notification
     *
     * @return void
     */
    public function testNotification()
    {
        $this->assertInstanceOf(Notification::class, PagSeguro::Notification());
    }
}