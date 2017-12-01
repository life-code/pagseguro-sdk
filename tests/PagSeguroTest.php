<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\Contracts\PreApprovals\Plan;
use PagSeguro\Contracts\PreApprovals\PreApproval;
use PagSeguro\Contracts\PreApprovals\Notification as NotificationPreApproval;
use PagSeguro\Contracts\PreApprovals\Cancelation as CancelationPreApproval;
use PagSeguro\Contracts\Transactions\Payment;
use PagSeguro\Contracts\Transactions\Notification as PaymentNotification;

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
class PagSeguroTest extends TestCase
{
    /**
     * Test version
     *
     * @return void
     */
    public function testVersion()
    {
        $this->assertEquals('1.0.1', PagSeguro::version());
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
     * Test instance plan
     *
     * @return void
     */
    public function testPlan()
    {
        $this->assertInstanceOf(Plan::class, PagSeguro::plan());
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
     * Test instance pre approvals notification
     *
     * @return void
     */
    public function testPreApprovalNotification()
    {
        $this->assertInstanceOf(NotificationPreApproval::class, PagSeguro::preApprovalNotification());
    }
    
    /**
     * Test instance pre approvals cancelation
     *
     * @return void
     */
    public function testPreApprovalCancelation()
    {
        $this->assertInstanceOf(CancelationPreApproval::class, PagSeguro::preApprovalCancelation());
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