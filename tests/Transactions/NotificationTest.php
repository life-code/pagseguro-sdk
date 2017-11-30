<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Contracts\Transactions\Notification as NotificationContract;
use PagSeguro\Transactions\Notification;
use PagSeguro\Contracts\Http\Response;

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
class NotificationTest extends TestCase
{
    /**
     * Test instance
     * 
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(NotificationContract::class, PagSeguro::paymentNotification());
    }
    
    /**
     * Test for code
     * 
     * @return void
     */
    public function testForCode()
    {
        $notification = PagSeguro::paymentNotification();
        
        $this->assertInstanceOf(Response::class, $notification->forCode('0BE69413A42B40D998581B9A8732A1CD'));
    }
}