<?php

namespace PagSeguro\Support;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.8
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
trait Mask
{
    /**
     * @var array
     */ 
    private $search = [
        '.', ',', '-', '(', ')', ' ', '/', '_'
    ];
    
    /**
     * @var string
     */
    private $replace = '';
    
    /**
     * Get search
     * 
     * @return array
     */ 
    private function getSearch() : array
    {
        return $this->search;
    }
    
    /**
     * Get replace
     * 
     * @return string
     */ 
    private function getReplace() : string
    {
        return $this->replace;
    }
    
    /**
     * Remove mask
     * 
     * @param mixed $item
     * @return string
     */ 
    public function removeMask($item) : string
    {
        return (string) str_replace($this->getSearch(), $this->getReplace(), $item);
    }
    
    /**
     * Apply mask on phone
     * 
     * @param string $phone
     * @return string
     */ 
    public function phoneMask(string $phone) : string
    {
        if (strlen($phone) === 11) {
            return sprintf("(%s) %s-%s", substr($phone, 0, 2), substr($phone, 2, 5), substr($phone, 7));
        }
        
        if (strlen($phone) === 10) {
            return sprintf("(%s) %s-%s", substr($phone, 0, 2), substr($phone, 2, 4), substr($phone, 6));
        }
        
        if (strlen($phone) === 9) {
            return sprintf("%s-%s", substr($phone, 0, 5), substr($phone, 5));
        }
        
        return sprintf("%s-%s", substr($phone, 0, 4), substr($phone, 4));
    }
}