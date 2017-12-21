<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Contracts\Transactions\Abandoned as AbandonedContract;
use PagSeguro\Transactions\Interval;
use PagSeguro\Contracts\Http\Response;
use DateTime;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class AbandonedTest extends TestCase
{
    /**
     * Test instance
     * 
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(AbandonedContract::class, PagSeguro::abandoned());
    }
    
    /**
     * Test search
     * 
     * @return void
     */
    public function testSearch()
    {
        $abandoned = PagSeguro::abandoned();
        
        $interval = new Interval();
        $interval->setInitialDate(new DateTime('2017-11-01'));
        $interval->setFinalDate(new DateTime('2017-11-23'));
        $interval->setPage(1);
        $interval->setMaxPageResults(1);
        
        $this->assertInstanceOf(Response::class, $abandoned->search($interval));
    }
}