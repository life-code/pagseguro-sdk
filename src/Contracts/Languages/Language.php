<?php

namespace PagSeguro\Contracts\Languages;

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
interface Language
{
    /**
     * Generate path
     * 
     * @param string $path
     * @return string
     */
    public function generatePath(string $path) : string;
    
    /**
     * Translate error value
     * 
     * @param int $code
     * @param string $default
     * @return string
     */
    public function translate(int $code, string $default = '') : string;
    
    /**
     * Get translations
     * 
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return array
     */
    public function getTranslations() : array;
}