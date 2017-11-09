<?php

namespace PagSeguro\Customer;

use PagSeguro\Contracts\Phone as PhoneContract;
use PagSeguro\Support\Mask;
use PagSeguro\Exceptions\PagseguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.3
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Phone implements PhoneContract
{
    use Mask;
    
    /**
     * @var string
     */ 
    private $area_code = '';
    
    /**
     * @var string
     */ 
    private $number = '';
    
    /**
     * Get area code
     * 
     * @return string
     */
    public function getAreaCode() : string
    {
        return $this->area_code;
    }

    /**
     * Set area code
     * 
     * @param string $code
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setAreaCode(string $area_code)
    {
        if (! preg_match('/^([1-9]\d{1})$/', $area_code)) {
            throw new PagseguroException("The [$area_code] isn't a valid area code");
        }
        
        $this->area_code = $area_code;
        
        return $this;
    }

    /**
     * Get number
     * 
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * Set number
     * 
     * @param string $number
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return string
     */
    public function setNumber(string $number)
    {
        if (! preg_match('/^([0-9]\d{7,8})$/', $number)) {
            throw new PagseguroException("The [$number] isn't a valid number");
        }
        
        $this->number = $number;
        
        return $this;
    }
    
    /**
     * To string phone
     * 
     * @param bool $mask
     * @return string
     */
    public function toString(bool $mask = true) : string
    {
        $phone = $this->getAreaCode() . $this->getNumber();
        
        return ($mask) ? $this->phoneMask($phone) : $phone;
    }
}