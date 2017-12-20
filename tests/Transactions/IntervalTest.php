<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Transactions\Interval;
use PagSeguro\Contracts\Transactions\Interval as IntervalContract;
use \DateTime;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
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
    
    /**
     * Test get initial date
     *
     * @return void
     */
    public function testGetInitialDate()
    {
        $this->assertInstanceOf(DateTime::class, $this->instance()->setInitialDate(new DateTime())->getInitialDate());
    }
    
    /**
     * Test set initial date
     *
     * @return void
     */
    public function testSetInitialDate()
    {
        $this->assertInstanceOf(IntervalContract::class, $this->instance()->setInitialDate(new DateTime()));
    }
    
    /**
     * Test get final date
     *
     * @return void
     */
    public function testGetFinalDate()
    {
        $this->assertInstanceOf(DateTime::class, $this->instance()->setFinalDate(new DateTime())->getFinalDate());
    }
    
    /**
     * Test set final date
     *
     * @return void
     */
    public function testSetFinalDate()
    {
        $this->assertInstanceOf(IntervalContract::class, $this->instance()->setFinalDate(new DateTime()));
    }
    
    /**
     * Test get page
     *
     * @return void
     */
    public function testGetPage()
    {
        $this->assertEquals(1, $this->instance()->setPage(1)->getPage());
    }
    
    /**
     * Test set page
     *
     * @return void
     */
    public function testSetPage()
    {
        $this->assertInstanceOf(IntervalContract::class, $this->instance()->setPage(1));
    }
    
    /**
     * Test get max page results
     *
     * @return void
     */
    public function testGetMaxPageResults()
    {
        $this->assertEquals(1, $this->instance()->setMaxPageResults(1)->getMaxPageResults());
    }
    
    /**
     * Test set max page results
     *
     * @return void
     */
    public function testSetMaxPageResults()
    {
        $this->assertInstanceOf(IntervalContract::class, $this->instance()->setMaxPageResults(1));
    }
}