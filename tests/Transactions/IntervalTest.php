<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Interval;
use PagSeguro\Contracts\Transactions\Interval as IntervalContract;

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
class IntervalTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Transactions\Interval
     */
    public function instance()
    {
        return new Interval();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(IntervalContract::class, $this->instance());
    }
}