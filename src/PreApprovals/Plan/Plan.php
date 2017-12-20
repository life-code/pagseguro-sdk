<?php

namespace PagSeguro\PreApprovals\Plan;

use PagSeguro\Contracts\Credentials\AccountCredentials;
use PagSeguro\Contracts\Credentials\Environment;
use PagSeguro\Contracts\PreApprovals\Plan\Plan as PlanContract;
use PagSeguro\PreApprovals\Plan\PreApproval;
use PagSeguro\Http\PreApprovals\Plan\Request;
use PagSeguro\Exceptions\PagSeguroException;
use PagSeguro\Support\Validator;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     1.0.3
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
     * @var integer
     */
    private $max_uses = 0;
    
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
     * Get redirect URL
     * 
     * @return string
     */
    public function getRedirectURL() : string
    {
        return $this->redirect_url;
    }
    
    /**
     * Set redirect URL
     * 
     * @param string $redirect_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setRedirectURL(string $redirect_url)
    {
        if (!$this->validateUrl($notification_url)) {
            throw new PagSeguroException($notification_url, 2061);
        }
        
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
     * Set receive email
     * 
     * @param string $receiver_email
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setReceiverEmail(string $receiver_email)
    {
        if (!$this->validateEmail($receiver_email)) {
            throw new PagSeguroException($receiver_email, 2062);
        }
        
        $this->receiver_email = $receiver_email;
        
        return $this;
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
     * Set review URL
     * 
     * @param string $review_url
     * @throws \PagSeguro\Exceptions\PagSeguroException
     * @return $this
     */
    public function setReviewURL(string $review_url)
    {
        if (!$this->validateUrl($review_url)) {
            throw new PagSeguroException($review_url, 2063);
        }
        
        $this->review_url = $review_url;
        
        return $this;
    }
    
    /**
     * Get max_uses
     * 
     * @return integer
     */
    public function getMaxUses() : integer
    {
        return $this->max_uses;
    }
    
    /**
     * Set max_uses
     * 
     * @param integer $max_uses
     * @return $this
     */
    public function setMaxUses(integer $max_uses)
    {
        $this->max_uses = $max_uses;
        
        return $this;
    }
    
    /**
     * Create new plan
     * 
     * @param \PagSeguro\PreApprovals\Plan\PreApproval $pre_approval
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function create(PreApproval $pre_approval)
    {
        $request = new Request($this->credentials, $this->env);
        
        return $request->exchangeData($this, $pre_approval)->send();
    }
}