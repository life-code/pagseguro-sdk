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
    
    /**
     * Test get ID
     *
     * @return void
     */
    public function testGetId()
    {
        $this->assertEquals('6564621364535', $this->instance()->setId('6564621364535')->getId());
    }
    
    /**
     * Test set ID
     *
     * @return void
     */
    public function testSetId()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setId('6564621364535'));
    }
    
    /**
     * Test get description
     *
     * @return void
     */
    public function testGetDescription()
    {
        $description = 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.';
        
        $this->assertEquals($description, $this->instance()->setDescription($description)->getDescription());
    }
    
    /**
     * Test set description
     *
     * @return void
     */
    public function testSetDescription()
    {
        $description = 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.';
        
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setDescription($description));
    }
    
    /**
     * Test get amount
     *
     * @return void
     */
    public function testGetAmount()
    {
        $this->assertEquals('10.00', $this->instance()->setAmount(10.0)->getAmount());
    }
    
    /**
     * Test set amount
     *
     * @return void
     */
    public function testSetAmount()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setAmount(10.0));
    }
    
    /**
     * Test get quantity
     *
     * @return void
     */
    public function testGetQuantity()
    {
        $this->assertEquals(1, $this->instance()->setQuantity(1)->getQuantity());
    }
    
    /**
     * Test set quantity
     *
     * @return void
     */
    public function testSetQuantity()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setQuantity(1));
    }
    
    /**
     * Test get weight
     *
     * @return void
     */
    public function testGetWeight()
    {
        $this->assertEquals(1, $this->instance()->setWeight(1)->getWeight());
    }
    
    /**
     * Test set weight
     *
     * @return void
     */
    public function testSetWeight()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setWeight(1));
    }
    
    /**
     * Test get shipping cost
     *
     * @return void
     */
    public function testGetShippingCost()
    {
        $this->assertEquals('10.00', $this->instance()->setShippingCost(10.0)->getShippingCost());
    }
    
    /**
     * Test set shipping cost
     *
     * @return void
     */
    public function testSetShippingCost()
    {
        $this->assertInstanceOf(ItemContract::class, $this->instance()->setShippingCost(10.0));
    }
    
    /**
     * Test to array
     * 
     * @return void
     */
    public function testToArray()
    {
        $this->assertCount(6, $this->instance()->toArray());
    }
}