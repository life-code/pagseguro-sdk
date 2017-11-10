<?php

namespace PagSeguro\Items;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.6
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Item
{
    /**
     * @var string
     */
    private $id = '';
    
    /**
     * @var string
     */
    private $description = '';
    
    /**
     * @var float
     */
    private $amount = 0;
    
    /**
     * @var int
     */
     
    private $quantity = 0;
    
    /**
     * @var float
     */
    private $shipping_cost = 0;
    
    /**
     * @var int
     */
    private $weight = 0;
    
    /**
     * Get ID
     * 
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * Set id
     * 
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Get description
     * 
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * Set description
     * 
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get amount
     * 
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * Set amount
     * 
     * @param float $amount
     * @return $this
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * Get quantity
     * 
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }

    /**
     * Set quantity
     * 
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * Get shipping cost
     * 
     * @return string
     */
    public function getShippingCost() : string
    {
        return $this->shipping_cost;
    }

    /**
     * Set shipping cost
     * 
     * @param string $shipping_cost
     * @return $this
     */
    public function setShippingCost(string $shipping_cost)
    {
        $this->shipping_cost = $shipping_cost;
        
        return $this;
    }
    
    /**
     * Get weight
     * 
     * @return int
     */
    public function getWeight() : int
    {
        return $this->weight;
    }

    /**
     * Set weight
     * 
     * @param int $weight
     * @return $this
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
        
        return $this;
    }
}