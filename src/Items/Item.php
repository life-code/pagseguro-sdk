<?php

namespace PagSeguro\Items;

use PagSeguro\Contracts\Items\Item as ItemContract;

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
class Item implements ItemContract
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
     * @return string
     */
    public function getAmount() : string
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
        $this->amount = number_format($amount, 2, '.', '');
        
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
}