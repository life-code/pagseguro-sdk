<?php

namespace Pagseguro\Http;

use PagSeguro\Contracts\Http\ErrorBag as ErrorBagContracts;

class ErrorBag implements ErrorBagContracts
{
    /**
     * @var array
     */ 
    private $data;
    
    /**
     * Set data
     * 
     * @param array $errors
     * @return $this
     */ 
    public function setData(array $errors)
    {
        $exchange = [];
        
        foreach ($errors as $key => $value) {
            $exchange[] = (object) [
                'code'  => $key,
                'value' => $value,
            ];
        }
        
        $this->data = $exchange;
    }
}