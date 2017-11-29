<?php

namespace PagSeguro\Contracts\Items;

interface Item
{
    /**
     * Get ID
     * 
     * @return string
     */
    public function getId() : string;

    /**
     * Set id
     * 
     * @param string $id
     * @return $this
     */
    public function setId(string $id);
    
    /**
     * Get description
     * 
     * @return string
     */
    public function getDescription() : string;

    /**
     * Set description
     * 
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);
    
    /**
     * Get amount
     * 
     * @return string
     */
    public function getAmount() : string;

    /**
     * Set amount
     * 
     * @param float $amount
     * @return $this
     */
    public function setAmount(float $amount);
    
    /**
     * Get quantity
     * 
     * @return int
     */
    public function getQuantity() : int;

    /**
     * Set quantity
     * 
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}