<?php

namespace PagSeguro\Languages;

use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Contracts\Credentials\Environment;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.6
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Language
{
    /**
     * Base path to language files
     * 
     * @var string
     */
    private $base_path = __DIR__ . '/../Config/Translation/';
    
    /**
     * Translations in file
     * 
     * @var array
     */
    private $translations = [];
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @param string $path
     * @return void
     */
    public function __construct(Environment $env, string $path)
    {
        $this->env       = $env;
        $this->base_path = $this->generatePath($path);
    }
    
    /**
     * Generate path
     * 
     * @param string $path
     * @return string
     */
    public function generatePath(string $path) : string
    {
        if (substr($path, 0, 1) === '/') {
            return $this->base_path . substr($path, 1) . '/';
        }
        
        return $this->base_path . $path . '/';
    }
    
    /**
     * Translate error value
     * 
     * @param int $code
     * @param string $default
     * @return string
     */
    public function translate(int $code, string $default = '') : string
    {
        if (!$this->translations) {
            $this->translations = $this->getTranslations();
        }
        
        return $this->translations[$code] ?? $default;
    }
    
    /**
     * Get translations
     * 
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return array
     */
    public function getTranslations() : array
    {
        $lang = $this->env->getLocation();
        
        $file = $this->base_path . $lang . '.php';
        
        if (!file_exists($file)) {
            throw new PagSeguroException("The file [$file] does not exists.");
        }
        
        return require($file);
    }
}