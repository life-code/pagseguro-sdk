<?php

namespace PagSeguro;

class PagSeguro
{
    /**
     * The PagSeguro version.
     *
     * @var string
     */
    const VERSION = '0.2';

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