<?php

namespace PagSeguro\Contracts\Common;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Address
{
    /**
     * Get country
     * 
     * @return string
     */
    public function getCountry() : string;

    /**
     * Set country
     * 
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * Get state
     * 
     * @return string
     */
    public function getState() : string;

    /**
     * Set state
     * 
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

    /**
     * Get city
     * 
     * @return string
     */
    public function getCity() : string;

    /**
     * Set city
     * 
     * @param string $city
     * @return $this
     */
    public function setCity(string $city);

    /**
     * Get cep
     * 
     * @return string
     */
    public function getCep() : string;

    /**
     * Set cep
     * 
     * @param string $cep
     * @return $this
     */
    public function setCep(string $cep);

    /**
     * Get district
     * 
     * @return string
     */
    public function getDistrict() : string;

    /**
     * Set district
     * 
     * @param string $district
     * @return $this
     */
    public function setDistrict(string $district);

    /**
     * Get street
     * 
     * @return string
     */
    public function getStreet() : string;

    /**
     * Set street
     * 
     * @param string $street
     * @return $this
     */
    public function setStreet(string $street);

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
     * @return $this
     */
    public function setNumber(string $number);

    /**
     * Get complement
     * 
     * @return string
     */
    public function getComplement() : string;

    /**
     * Set complement
     * 
     * @param string $complement
     * @return $this
     */
    public function setComplement(string $complement);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray() : array;
}