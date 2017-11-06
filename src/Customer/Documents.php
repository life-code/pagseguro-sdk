<?php

namespace PagSeguro\Customer;

use PagSeguro\Exceptions\PagseguroException;

class Documents
{
    /**
     * @var string
     */
    const CPF = 'CPF';
    
    /**
     * @var array
     */
    private $items;

    /**
     * Get item
     * 
     * @return string
     */ 
    public function getItem($type)
    {
        return $this->items[$type];
    }
    
    /**
     * Set item
     * 
     * @param string $cpf
     * @param string $item
     * @return $this
     */ 
    public function setItem(string $type, string $item)
    {
        if (!$this->validate($type)) {
            throw new PagseguroException("The [$type] isn't a valid document.");
        }
        
        $this->items[$type] = $item;
        
        return $this;
    }
    
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */ 
    public function validate(string $type) : bool
    {
        return in_array($type, $this->getTypes());
    }
    
    /**
     * Get types
     * 
     * @return array
     */ 
    public function getTypes()
    {
        return [
            self::CPF,
        ];
    }
}