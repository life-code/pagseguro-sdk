<?php

namespace PagSeguro\Contracts\Transactions;

use PagSeguro\Contracts\Transations\Interval as IntervalContract;

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
interface Abandoned
{
    /**
     * Search abandoned transactions
     * 
     * @param \PagSeguro\Contracts\Transations\Interval $interval
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function search(IntervalContract $interval);
}