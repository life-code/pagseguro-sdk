<?php

namespace PagSeguro\Common;

use PagSeguro\Contracts\Common\Address as AddressContract;
use PagSeguro\Common\Country;
use PagSeguro\Exceptions\PagSeguroException;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.2
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
     * Make new instance of this class
     * 
     * @param string $country
     * @param string $state
     * @param string $city
     * @param string $cep
     * @param string $district
     * @param string $street
     * @param string $number
     * @param string $complement
     * @return void
     */
    public function __construct(string $cep        = null, 
                                string $street     = null, 
                                string $number     = null, 
                                string $complement = null, 
                                string $district   = null, 
                                string $city       = null, 
                                string $state      = null, 
                                string $country    = null)
    {
        ($cep)        ? $this->setCep($cep)               : false;
        ($street)     ? $this->setStreet($street)         : false;
        ($number)     ? $this->setNumber($number)         : false;
        ($complement) ? $this->setComplement($complement) : false;
        ($district)   ? $this->setDistrict($district)     : false;
        ($city)       ? $this->setCity($city)             : false;
        ($state)      ? $this->setState($state)           : false;
        ($country)    ? $this->setCountry($country)       : false;
    }

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
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setCountry(string $country)
    {
        if (! Country::check($country)) {
            throw new PagSeguroException($country, 2021);
        }
        
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
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'street'     => $this->getStreet(),
            'number'     => $this->getNumber(),
            'complement' => $this->getComplement(),
            'district'   => $this->getDistrict(),
            'city'       => $this->getCity(),
            'state'      => $this->getState(),
            'country'    => $this->getCountry(),
            'postalCode' => $this->getCep(),
        ];
    }
}