<?php

use PHPUnit\Framework\TestCase;

use PagSeguro\PagSeguro;
use PagSeguro\Contracts\Transactions\Payment as PaymentContract;
use PagSeguro\Items\Item;
use PagSeguro\Shipping\Shipping;
use PagSeguro\Common\Phone;
use PagSeguro\Common\Documents;
use PagSeguro\Common\Address;
use PagSeguro\Shipping\Type as ShippingType;
use PagSeguro\Transactions\Method;
use PagSeguro\Transactions\Type as MethodType;
use PagSeguro\Transactions\Bank;
use PagSeguro\Transactions\CreditCard\CreditCard;
use PagSeguro\Transactions\CreditCard\Holder;
use PagSeguro\Transactions\CreditCard\Installment;
use PagSeguro\Contracts\Http\Response;

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
class PaymentTest extends TestCase
{
    /**
     * Make instance
     *
     * @return \PagSeguro\Contracts\Transactions\Payment
     */
    public function instance()
    {
        return PagSeguro::payment();
    }
    
    /**
     * Test instance
     * 
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance());
    }
    
    /**
     * Test get currency
     *
     * @return void
     */
    public function testGetCurrency()
    {
        $this->assertEquals('BRL', $this->instance()->setCurrency('BRL')->getCurrency());
    }
    
    /**
     * Test set currency
     *
     * @return void
     */
    public function testSetCurrency()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setCurrency('BRL'));
    }
    
    /**
     * Test throw set currency
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetCurrency()
    {
        $this->instance()->setCurrency('BR');
    }
    
    /**
     * Test get mode
     *
     * @return void
     */
    public function testGetMode()
    {
        $this->assertEquals('default', $this->instance()->setMode('default')->getMode());
    }
    
    /**
     * Test set mode
     *
     * @return void
     */
    public function testSetMode()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setMode('default'));
    }
    
    /**
     * Test throw set mode
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetMode()
    {
        $this->instance()->setMode('credit');
    }
    
    /**
     * Test get notification URL
     *
     * @return void
     */
    public function testGetNotificationURL()
    {
        $this->assertEquals('http://exemplo.com', $this->instance()->setNotificationURL('http://exemplo.com')->getNotificationURL());
    }
    
    /**
     * Test set notification URL
     *
     * @return void
     */
    public function testSetNotificationURL()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setNotificationURL('http://exemplo.com'));
    }
    
    /**
     * Test throw set notification URL
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetNotificationURL()
    {
        $this->instance()->setNotificationURL('exemplo.com');
    }
    
    /**
     * Test get redirect URL
     *
     * @return void
     */
    public function testGetRedirectURL()
    {
        $this->assertEquals('http://exemplo.com', $this->instance()->setRedirectURL('http://exemplo.com')->getRedirectURL());
    }
    
    /**
     * Test set redirect URL
     *
     * @return void
     */
    public function testSetRedirectURL()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setRedirectURL('http://exemplo.com'));
    }
    
    /**
     * Test throw set redirect URL
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetRedirectURL()
    {
        $this->instance()->setRedirectURL('exemplo.com');
    }
    
    /**
     * Test get receiver email
     *
     * @return void
     */
    public function testGetReceiverEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setReceiverEmail('vinicius_puglies@outlook.com')->getReceiverEmail());
    }
    
    /**
     * Test set receiver email
     *
     * @return void
     */
    public function testSetReceiverEmail()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setReceiverEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test throw set receiver email
     *
     * @expectedException \PagSeguro\Exceptions\PagSeguroException
     * @return void
     */
    public function testThrowSetReceiverEmail()
    {
        $this->instance()->setReceiverEmail('vinicius_puglies');
    }
    
    /**
     * Test get reference
     *
     * @return void
     */
    public function testGetReference()
    {
        $this->assertEquals('5341321345', $this->instance()->setReference('5341321345')->getReference());
    }
    
    /**
     * Test set reference
     *
     * @return void
     */
    public function testSetReference()
    {
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setReference('5341321345'));
    }
    
    /**
     * Test get Items
     *
     * @return void
     */
    public function testGetItems()
    {
        $item = new Item();
        
        $this->assertCount(1, $this->instance()->setItems($item)->getItems());
        $this->assertCount(2, $this->instance()->setItems($item)->setItems($item)->getItems());
    }
    
    /**
     * Test set Items
     *
     * @return void
     */
    public function testSetItems()
    {
        $item = new Item();
        
        $this->assertInstanceOf(PaymentContract::class, $this->instance()->setItems($item));
    }
    
    /**
     * Test transparent pay
     *
     * @return void
     */
    // public function testTransparentPay()
    // {
    //     $phone = new Phone('82', '28634136');
        
    //     $documents = new Documents([Documents::CPF => '24227052009']);
        
    //     $address = new Address('57040644', 'Rua Dom João VI', '155', 'apto. 306', 'Jacintinho', 'Alvorada', 'RS', 'BRA');
        
    //     $shipping = new Shipping($address, 100.00, ShippingType::TYPE_PAC);
        
    //     $customer = new Customer(
    //         'Vinicius Pugliesi',
    //         'vinicius_puglies@outlook.com',
    //         'Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs',
    //         '191.13.60.30',
    //         $phone,
    //         $address,
    //         $documents
    //     );
        
    //     $credit_card = new CreditCard();
        
    //     $method = new Method(MethodType::CREDITCARD, Bank::BANCO_DO_BRASIL, $credit_card);
        
    //     $this->assertInstanceOf(
    //         Response::class, 
    //         $this->instance()->transparentPay($shipping, $customer, $method
    //     );
    // }
}