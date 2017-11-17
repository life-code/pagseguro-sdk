<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\PreApprovals\PreApproval;
use PagSeguro\PreApprovals\Notification as NotificationPreApproval;
use PagSeguro\Payment\Payment;
use PagSeguro\Payment\Notification as PaymentNotification;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.95
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PagSeguroTest extends TestCase
{
    /**
     * Test version
     *
     * @return void
     */
    public function testVersion()
    {
        $this->assertEquals('0.8.95', PagSeguro::version());
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
        $this->assertInstanceOf(NotificationPreApproval::class, PagSeguro::notification());
    }
    
    /**
     * Test instance notification
     *
     * @return void
     */
    public function testPaymentNotification()
    {
        $this->assertInstanceOf(PaymentNotification::class, PagSeguro::paymentNotification());
    }
}