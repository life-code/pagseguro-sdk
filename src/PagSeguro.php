<?php

namespace PagSeguro;

use PagSeguro\Support\Factory;
use PagSeguro\Session\Session;
use PagSeguro\PreApprovals\PreApproval;
use PagSeguro\PreApprovals\Notification as PreApprovalNotification;
use PagSeguro\Transactions\Payment;
use PagSeguro\Transactions\Notification as PaymentNotification;
use PagSeguro\Transactions\Abandoned;

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
class PagSeguro
{
    use Factory;
    
    /**
     * The PagSeguro version.
     *
     * @var string
     */
    const VERSION = '0.8.97';
    
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version()
    {
        return self::VERSION;
    }
    
    /**
     * Handles pagseguro session instance
     * 
     * @return \PagSeguro\Session\Session
     */
    public static function session()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new Session($credentials, $env);
    }
    
    /**
     * Handles pagseguro pre-approvals instance
     * 
     * @return \PagSeguro\PreApprovals\PreApproval
     */
    public static function preApproval()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new PreApproval($credentials, $env);
    }
    
    /**
     * Handles pagseguro pre-approvals notifications instance
     * 
     * @return \PagSeguro\PreApprovals\Notification
     */
    public static function preApprovalNotification()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new PreApprovalNotification($credentials, $env);
    }
    
    /**
     * Handles pagseguro payment instance
     * 
     * @return \PagSeguro\Transactions\Payment
     */
    public static function payment()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new Payment($credentials, $env);
    }
    
    /**
     * Handles pagseguro notifications instance
     * 
     * @return \PagSeguro\Transactions\Notification
     */
    public static function paymentNotification()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new PaymentNotification($credentials, $env);
    }
    
    /**
     * Handles pagseguro abandoned transactions instance
     * 
     * @return \PagSeguro\Transactions\Abandoned
     */
    public static function abandoned()
    {
        $env         = self::getEnv();
        $credentials = self::getCredentials();
        
        return new Abandoned($credentials, $env);
    }
}