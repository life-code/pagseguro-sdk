<?php

namespace PagSeguro\Customer;

use PagSeguro\Contracts\Address as AddressContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Address implements AddressContract
{
    /**
     * @var string
     */
    private $country = 'BRA';

    /**
     * @var string
     */
    private $state = '';

    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $cep = '';

    /**
     * @var string
     */
    private $district = '';

    /**
     * @var string
     */
    private $street = '';

    /**
     * @var string
     */
    private $number = '';

    /**
     * @var string
     */
    private $complement = '';
    
    /**
     * Get country
     * 
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }

    /**
     * Set country
     * 
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
        
        return $this;
    }

    /**
     * Get state
     * 
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * Set state
     * 
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = $state;
        
        return $this;
    }

    /**
     * Get city
     * 
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * Set city
     * 
     * @param string $city
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;
        
        return $this;
    }

    /**
     * Get cep
     * 
     * @return string
     */
    public function getCep() : string
    {
        return $this->cep;
    }

    /**
     * Set cep
     * 
     * @param string $cep
     * @return $this
     */
    public function setCep(string $cep)
    {
        $this->cep = $cep;
        
        return $this;
    }

    /**
     * Get district
     * 
     * @return string
     */
    public function getDistrict() : string
    {
        return $this->district;
    }

    /**
     * Set district
     * 
     * @param string $district
     * @return $this
     */
    public function setDistrict(string $district)
    {
        $this->district = $district;
        
        return $this;
    }

    /**
     * Get street
     * 
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }

    /**
     * Set street
     * 
     * @param string $street
     * @return $this
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
        
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
     * @return $this
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
        
        return $this;
    }

    /**
     * Get complement
     * 
     * @return string
     */
    public function getComplement() : string
    {
        return $this->complement;
    }

    /**
     * Set complement
     * 
     * @param string $complement
     * @return $this
     */
    public function setComplement(string $complement)
    {
        $this->complement = $complement;
        
        return $this;
    }
}