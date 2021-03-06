<?php

namespace PagSeguro\Common;

use PagSeguro\Contracts\Common\Phone as PhoneContract;
use PagSeguro\Support\Mask;
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
     * Make new instance of this class
     * 
     * @param string $area_code
     * @param string $number
     * @return void
     */
    public function __construct(string $area_code = null, string $number = null)
    {
        ($area_code) ? $this->setAreaCode($area_code) : false;
        ($number)    ? $this->setNumber($number)      : false;
    }

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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setAreaCode(string $area_code)
    {
        if (! preg_match('/^([1-9]\d{1})$/', $area_code)) {
            throw new PagSeguroException($area_code, 2011);
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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return string
     */
    public function setNumber(string $number)
    {
        if (! preg_match('/^([0-9]\d{7,8})$/', $number)) {
            throw new PagSeguroException($number, 2012);
        }
        
        $this->number = $number;
        
        return $this;
    }
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'areaCode' => $this->getAreaCode(),
            'number'   => $this->getNumber(),
        ];
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