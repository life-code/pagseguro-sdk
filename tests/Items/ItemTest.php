<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Items\Item;
use PagSeguro\Contracts\Items\Item as ItemContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class ItemTest extends TestCase
{
    /**
     * Item Instance
     * 
     * @return \PagSeguro\Contracts\Items\Item
     */
    public static function instance()
    {
        return new Item();
    }
    
    /**
     * Test instance
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance());
    }
}