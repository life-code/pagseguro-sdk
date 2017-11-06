<?php

namespace PagSeguro\Contracts;

interface Documents
{
    /**
     * Get item
     * 
     * @return string
     */
    public function getItem($type);
    
    /**
     * Set item
     * 
     * @param string $cpf
     * @param string $item
     * @return $this
     */
    public function setItem(string $type, string $item);
    
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public function validate(string $type) : bool;
    
    /**
     * Get types
     * 
     * @return array
     */
    public function getTypes();
}
