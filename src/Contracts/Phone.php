<?php

namespace PagSeguro\Contracts;

interface Phone
{
    /**
     * Get code
     * 
     * @return string
     */
    public function getAreaCode() : string;

    /**
     * Set code
     * 
     * @param string $code
     * @return $this
     */
    public function setAreaCode(string $area_code);

    /**
     * Get number
     * 
     * @return string
     */
    public function getNumber() : string;

    /**
     * Set number
     * 
     * @param string $number
     * @return string
     */
    public function setNumber(string $number);
    
    /**
     * To string phone
     * 
     * @return string
     */
    public function toString() : string;
}
