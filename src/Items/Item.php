<?php

namespace PagSeguro\Items;

use PagSeguro\Contracts\Items\Item as ItemContract;
use PagSeguro\Exceptions\PagSeguroException;

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
     * @var int
     */
    private $weight = 0;
    
    /**
     * @var float
     */
    private $shipping_cost = 0;
    
    /**
     * Make new instance of this class
     * 
     * @param string $id
     * @param string $description
     * @param float $amount
     * @param int $quantity
     * @param int $weight
     * @param float $shipping_cost
     * @return void
     */
    public function __construct(string $id           = null, 
                                string $description  = null, 
                                float $amount        = null, 
                                int $quantity        = null, 
                                int $weight          = null, 
                                float $shipping_cost = null)
    {
        ($id)            ? $this->setId($id)                      : false;
        ($description)   ? $this->setDescription($description)    : false;
        ($amount)        ? $this->setAmount($amount)              : false;
        ($quantity)      ? $this->setQuantity($quantity)          : false;
        ($weight)        ? $this->setWeight($weight)              : false;
        ($shipping_cost) ? $this->setShippingCost($shipping_cost) : false;
    }

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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setDescription(string $description)
    {
        if (strlen($description) > 100) {
            throw new PagSeguroException($description, 2051);
        }
        
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
        return number_format($this->amount, 2, '.', '');
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
    
    /**
     * Get shipping cost
     * 
     * @return float
     */
    public function getShippingCost() : string
    {
        return number_format($this->shipping_cost, 2, '.', '');
    }

    /**
     * Set shipping cost
     * 
     * @param float $shipping_cost
     * @return $this
     */
    public function setShippingCost(float $shipping_cost)
    {
        $this->shipping_cost = number_format($shipping_cost, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'id'           => $this->getId(),
            'description'  => $this->getDescription(),
            'amount'       => $this->getAmount(),
            'quantity'     => $this->getQuantity(),
            'weight'       => $this->getWeight(),
            'shippingCost' => $this->getShippingCost(),
        ];
    }
}