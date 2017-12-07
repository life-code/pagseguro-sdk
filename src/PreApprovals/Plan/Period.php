<?php

namespace PagSeguro\PreApprovals\Plan;

use PagSeguro\Contracts\Common\Type as TypeContract;

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
class Period implements TypeContract
{
    /**
     * @var string
     */
    const WEEKLY = 'WEEKLY';

    /**
     * @var string
     */
    const MONTHLY = 'MONTHLY';

    /**
     * @var string
     */
    const BIMONTHLY = 'BIMONTHLY';

    /**
     * @var string
     */
    const TRIMONTHLY = 'TRIMONTHLY';

    /**
     * @var string
     */
    const SEMESTRALLY = 'SEMIANNUALLY';

    /**
     * @var string
     */
    const YEARLY = 'YEARLY';
	
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public static function check(string $type) : bool
    {
        return in_array($type, self::getTypes());
    }
    
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::WEEKLY,
            self::MONTHLY,
            self::BIMONTHLY,
            self::TRIMONTHLY,
            self::SEMESTRALLY,
            self::YEARLY
        ];
    }
}