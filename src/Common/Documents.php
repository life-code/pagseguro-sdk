<?php

namespace PagSeguro\Common;

use PagSeguro\Contracts\Common\Documents as DocumentsContract;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Documents implements DocumentsContract
{
    /**
     * @var string
     */
    const CPF = 'CPF';
    
    /**
     * @var array
     */
    private $items = [
        self::CPF => ''
    ];
    
    /**
     * Make new instance of this class
     * 
     * @param array $items
     * @return void
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $key => $value) {
            $this->setItem($key, $value);
        }
    }

    /**
     * Get item
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function getItem(string $type) : string
    {
        if (! isset($this->items[$type])) {
            throw new PagSeguroException($type, 2001);
        }
        
        return (string) $this->items[$type];
    }
    
    /**
     * Set item
     * 
     * @param string $cpf
     * @param string $item
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setItem(string $type, string $item)
    {
        if (!$this->validate($type)) {
            throw new PagSeguroException($type, 2002);
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
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'type'  => self::CPF,
            'value' => $this->getItem(self::CPF),
        ];
    }
}