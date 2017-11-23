<?php

namespace PagSeguro\Transactions;

use PagSeguro\Contracts\Transactions\Payment as IntervalContract;
use PagSeguro\Exceptions\PagseguroException;
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
     * Get initial date
     * 
     * @return string
     */
    public function getTnitialDate() : string
    {
        return $this->initial_date;
    }
    
    /**
     * Set initial date
     * 
     * @param \DateTime $initial_date
     * @return $this
     */
    public function setTnitialDate(DateTime $initial_date)
    {
        $this->initial_date = $initial_date;
        
        return $this;
    }
    
    /**
     * Get final date
     * 
     * @return string
     */
    public function getFinalDate() : string
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
}