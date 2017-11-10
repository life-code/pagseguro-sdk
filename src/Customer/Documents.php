<?php

namespace PagSeguro\Customer;

use PagSeguro\Contracts\Documents as DocumentsContract;
use PagSeguro\Exceptions\PagseguroException;

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
class Documents implements DocumentsContract
{
    /**
     * @var array
     */
    private $items = [];

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
     * @throws \PagSeguro\Exceptions\PagseguroException
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
            DocumentsContract::CPF,
        ];
    }
}