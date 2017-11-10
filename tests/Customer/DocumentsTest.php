<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\Contracts\Documents as DocumentsContract;
use PagSeguro\Customer\Documents;
use PagSeguro\Exceptions\PagseguroException;

class DocumentsTest extends TestCase
{
    /**
     * Documents Instance
     * 
     * @return \PagSeguro\Contracts\Documents
     */
    public function instance()
    {
        return new Documents();
    }
    
    /**
     * Test set item
     *
     * @return void
     */
    public function testSetItem()
    {
        $this->assertInstanceOf(DocumentsContract::class, $this->instance()->setItem(DocumentsContract::CPF, '44827813809'));
    }
    
    /**
     * Test get item
     *
     * @return void
     */
    public function testGetItem()
    {
        $this->assertEquals(
            '44827813809', 
            $this->instance()->setItem(DocumentsContract::CPF, '44827813809')->getItem(DocumentsContract::CPF)
        );
    }
    
    /**
     * Test throw set item
     *
     * @expectedException \PagSeguro\Exceptions\PagseguroException
     * @return void
     */
    public function testThrowSetItem()
    {
        $this->instance()->setItem('RG', '44827813809');
    }
}