<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Transactions\Interval as IntervalContract;
use DateTime;

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
class Interval implements IntervalContract
{
    /**
     * @var \DateTime
     */
    private $initial_date;
    
    /**
     * @var \DateTime
     */
    private $final_date;
    
    /**
     * @var int
     */
    private $page = 1;
    
    /**
     * @var int
     */
    private $max_page_results = 1;
    
    /**
     * Get initial date
     * 
     * @return \DateTime
     */
    public function getInitialDate()
    {
        return $this->initial_date;
    }
    
    /**
     * Set initial date
     * 
     * @param \DateTime $initial_date
     * @return $this
     */
    public function setInitialDate(DateTime $initial_date)
    {
        $this->initial_date = $initial_date;
        
        return $this;
    }
    
    /**
     * Get final date
     * 
     * @return \DateTime
     */
    public function getFinalDate()
    {
        return $this->final_date;
    }
    
    /**
     * Set final date
     * 
     * @param \DateTime $final_date
     * @return $this
     */
    public function setFinalDate(DateTime $final_date)
    {
        $this->final_date = $final_date;
        
        return $this;
    }
    
    /**
     * Get page
     * 
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    
    /**
     * Set page
     * 
     * @param int $page
     * @return $this
     */
    public function setPage(int $page)
    {
        $this->page = $page;
        
        return $this;
    }
    
    /**
     * Get max page results
     * 
     * @return int
     */
    public function getMaxPageResults() : int
    {
        return $this->max_page_results;
    }
    
    /**
     * Set max page results
     * 
     * @param int $max_page_results
     * @return $this
     */
    public function setMaxPageResults(int $max_page_results)
    {
        $this->max_page_results = $max_page_results;
        
        return $this;
    }
}