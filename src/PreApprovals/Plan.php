<?php

namespace PagSeguro\PreApprovals;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\PreApprovals\Plan as PlanContract;
use PagSeguro\Http\PreApprovals\Plan\Request;
use PagSeguro\Exceptions\PagseguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.1
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Plan implements PlanContract
{
    use Validator;
    
    /**
     * @var \PagSeguro\Contracts\Credentials\AccountCredentials
     */
    private $credentials = '';
    
    /**
     * @var \PagSeguro\Contracts\Credentials\Environment
     */
    private $env = '';
    
    /**
     * @var string
     */
    private $redirect_url = '';
    
    /**
     * @var string
     */
    private $reference = '';
    
    /**
     * @var string
     */
    private $review_url = '';
    
    /**
     * @var string
     */
    private $receiver_email = '';
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Contracts\Credentials\AccountCredentials $credentials
     * @param \PagSeguro\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Get redirect_url
     * 
     * @return string
     */
    public function getRedirectURL() : string
    {
        return $this->redirect_url;
    }
    
    /**
     * Set redirect_url
     * 
     * @param string $redirect_url
     * @return $this
     */
    public function setRedirectURL(string $redirect_url)
    {
        $this->redirect_url = $redirect_url;
        
        return $this;
    }
    
    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    
    /**
     * Set reference
     * 
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
        
        return $this;
    }
    
    /**
     * Get receive email
     * 
     * @return string
     */
    public function getReceiverEmail() : string
    {
        return $this->receiver_email;
    }
    
    /**
     * Get review_url
     * 
     * @return string
     */
    public function getReviewURL() : string
    {
        return $this->review_url;
    }
    
    /**
     * Set review_url
     * 
     * @param string $review_url
     * @return $this
     */
    public function setReviewURL(string $review_url)
    {
        $this->review_url = $review_url;
        
        return $this;
    }
    
    /**
     * Set receive email
     * 
     * @param string $receiver_email
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setReceiverEmail(string $receiver_email)
    {
        if (!$this->validateEmail($receiver_email)) {
            throw new PagseguroException("The [$receiver_email] isn't a valid email.");
        }
        
        $this->receiver_email = $receiver_email;
        
        return $this;
    }
    
    /**
     * Create new plan
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create()
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this)->send();
    }
}