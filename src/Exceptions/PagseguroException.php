<?php

namespace PagSeguro\Exceptions;

use Exception;
use Throwable;
use PagSeguro\PagSeguro;
use PagSeguro\Languages\Language;

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
class PagseguroException extends Exception
{
    /**
     * Path to language files
     * 
     * @var string
     */
    private $path = 'Throws';
    
    /**
     * @var \PagSeguro\Languages\Language
     */
    private $language;
    
    /**
     * Make new instance of this class
     * 
     * @param string $message
     * @param int $code
     * @param \Throwable $previous
     * @return void
     */
    public function __construct(string $message = null, int $code = null, Throwable $previous = null)
    {
        $message = $this->handlerMessage($message, $code);
        
        parent::__construct($message, $code, $previous);
    }
    
    /**
     * Handles message
     * 
     * @param string $message
     * @param int $code
     * @return string
     */
    private function handlerMessage(string $message = null, int $code = null) : string
    {
        $translate = $this->getLanguage()->translate((int) $code);
        
        return str_replace('#value#', $message, $translate);
    }
    
    /**
     * Get Language instance
     * 
     * @return \PagSeguro\Languages\Language
     */
    private function getLanguage()
    {
        if (!$this->language) {
            $this->language = new Language($this->getEnv(), $this->getPath());
        }
        
        return $this->language;
    }
    
    /**
     * Get path
     * 
     * @return string
     */
    private function getPath() : string
    {
        return $this->path;
    }
    
    /**
     * Get environment
     * 
     * @return \PagSeguro\Contracts\Credentials\Environment
     */
    private function getEnv()
    {
        return Pagseguro::getEnv();
    }
}