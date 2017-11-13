<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Payment\Type;

class TypeTest extends TestCase
{
    /**
     * Test check
     *
     * @return void
     */
    public function testCheck()
    {
        $this->assertTrue(Type::check(Type::CREDITCARD));
        $this->assertTrue(! Type::check('CREDIT'));
    }
}