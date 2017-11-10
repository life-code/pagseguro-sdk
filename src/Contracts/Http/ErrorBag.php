<?php

namespace PagSeguro\Contracts\Http;

interface ErrorBag
{
    /**
     * Set data
     * 
     * @param array $errors
     * @return $this
     */ 
    public function setData(array $errors);
}