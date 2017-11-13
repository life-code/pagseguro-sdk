<?php

namespace PagSeguro\Payment\CreditCard;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Installment
{
    /**
     * @var integer
     */
    private $quantity = 0;
    
    /**
     * @var integer
     */
    private $no_interest_installment_quantity = 0;
    
    /**
     * @var integer
     */
    private $value = 0;
}