<?php

namespace PagSeguro\Contracts\Transactions;

use DateTime;

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
interface Interval
{
    /**
     * Get initial date
     * 
     * @return \DateTime
     */
    public function getTnitialDate();
    
    /**
     * Set initial date
     * 
     * @param \DateTime $initial_date
     * @return $this
     */
    public function setTnitialDate(DateTime $initial_date);
    
    /**
     * Get final date
     * 
     * @return \DateTime
     */
    public function getFinalDate();
    
    /**
     * Set final date
     * 
     * @param \DateTime $final_date
     * @return $this
     */
    public function setFinalDate(DateTime $final_date);
    
    /**
     * Get page
     * 
     * @return int
     */
    public function getPage() : int;
    
    /**
     * Set page
     * 
     * @param int $page
     * @return $this
     */
    public function setPage(int $page);
    
    /**
     * Get max page results
     * 
     * @return int
     */
    public function getMaxPageResults() : int;
    
    /**
     * Set max page results
     * 
     * @param int $max_page_results
     * @return $this
     */
    public function setMaxPageResults(int $max_page_results);
}