<?php

namespace PagSeguro\Support;

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
            return sprintf("(%s) %s-%s", substr($phone, 0, 2), substr($phone, 3, 5), substr($phone, 8));
        }
        
        if (strlen($phone) === 10) {
            return sprintf("(%s) %s-%s", substr($phone, 0, 2), substr($phone, 3, 4), substr($phone, 7));
        }
        
        if (strlen($phone) === 9) {
            return sprintf("%s-%s", substr($phone, 0, 5), substr($phone, 8));
        }
        
        return sprintf("%s-%s", substr($phone, 0, 4), substr($phone, 7));
    }
}