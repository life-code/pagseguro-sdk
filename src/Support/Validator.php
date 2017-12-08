<?php

namespace PagSeguro\Support;

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
trait Validator
{
    /**
     * Validate email
     * 
     * @param string $email
     * @return bool
     */
    private function validateEmail(string $email) : bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    /**
     * Validate ip
     * 
     * @param string $ip
     * @return bool
     */
    private function validateIp(string $ip) : bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP);
    }
    
    /**
     * Validate URL
     * 
     * @param string $url
     * @return bool
     */
    private function validateUrl(string $url) : bool
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
    
    /**
     * Validate date
     * 
     * @param string $date
     * @param string $type
     * @return bool
     */
    private function validateDate(string $date, string $type = 'pt-br') : bool
    {
        $month  = '';
        $day    = '';
        $year   = '';
        
        $date = explode('/', $date);
        
        if (count($date) !== 3) {
            return false;
        }
        
        if ($type === 'pt-br') {
            $month  = $date[1];
            $day    = $date[0];
            $year   = $date[2];
        } else if ($type === 'en') {
            $month  = $date[1];
            $day    = $date[2];
            $year   = $date[0];
        }
        
        return checkdate($month, $day, $year);
    }
    
    /**
     * Validate JSON
     * 
     * @param mixed $data
     * @return bool
     */
    private function isJSON($data) : bool
    {
        json_decode($data);
        return (json_last_error() === JSON_ERROR_NONE);
    }
}