<?php

namespace PagSeguro;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.4
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PagSeguro
{
    /**
     * The PagSeguro version.
     *
     * @var string
     */
    const VERSION = '0.4';

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }
}