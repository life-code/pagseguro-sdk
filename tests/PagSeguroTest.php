<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Session\Session;
use PagSeguro\PreApprovals\PreApproval;
use PagSeguro\PreApprovals\Notification as NotificationPreApproval;
use PagSeguro\PreApprovals\Cancelation as CancelationPreApproval;
use PagSeguro\Transactions\Payment;
use PagSeguro\Transactions\Notification as PaymentNotification;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.97
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
        $this->assertEquals('0.8.97', PagSeguro::version());
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