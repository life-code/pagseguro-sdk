<?php

namespace PagSeguro\Contracts\PreApprovals\Plan;

use PagSeguro\Contracts\PreApprovals\Plan\Expiration;
use DateTime;

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
interface PreApproval
{
    /**
     * Get name
     * 
     * @return string
     */
    public function getName() : string;
    
    /**
     * Set name
     * 
     * @param string $name
     * @return $this
     */
    public function setName(string $name);
    
    /**
     * Get charge
     * 
     * @return int
     */
    public function getCharge() : int;

    /**
     * Set charge
     * 
     * @param string $charge
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setCharge(string $charge);
    
    /**
     * Get period
     * 
     * @return int
     */
    public function getPeriod() : int;

    /**
     * Set period
     * 
     * @param string $period
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setPeriod(string $period);
    
    /**
     * Get amount per payment
     * 
     * @return string
     */
    public function getAmountPerPayment() : string;
    
    /**
     * Set amount per payment
     * 
     * @param float $amount_per_payment
     * @return $this
     */
    public function setAmountPerPayment(float $amount_per_payment);
    
    /**
     * Get max amount per period
     * 
     * @return string
     */
    public function getMaxAmountPerPeriod() : string;
    
    /**
     * Set max amount per period
     * 
     * @param float $max_amount_per_period
     * @return $this
     */
    public function setMaxAmountPerPeriod(float $max_amount_per_period);
    
    /**
     * Get max amount per payment
     * 
     * @return string
     */
    public function getMaxAmountPerPayment() : string;
    
    /**
     * Set max amount per payment
     * 
     * @param float $max_amount_per_payment
     * @return $this
     */
    public function setMaxAmountPerPayment(float $max_amount_per_payment);
    
    /**
     * Get max total amount
     * 
     * @return string
     */
    public function getMaxTotalAmount() : string;
    
    /**
     * Set max total amount
     * 
     * @param float $max_total_amount
     * @return $this
     */
    public function setMaxTotalAmount(float $max_total_amount);
    
    /**
     * Get max payments per period
     * 
     * @return string
     */
    public function getMaxPaymentsPerPeriod() : string;
    
    /**
     * Set max payments per period
     * 
     * @param float $max_payments_per_period
     * @return $this
     */
    public function setMaxPaymentsPerPeriod(float $max_payments_per_period);
    
    /**
     * Get membership fee
     * 
     * @return int
     */
    public function getMembershipFee() : int;
    
    /**
     * Set membership fee
     * 
     * @param int $membership_fee
     * @return $this
     */
    public function setMembershipFee(int $membership_fee);
    
    /**
     * Get trial period duration
     * 
     * @return int
     */
    public function getTrialPeriodDuration() : int;
    
    /**
     * Set trial period duration
     * 
     * @param int $trial_period_duration
     * @return $this
     */
    public function setTrialPeriodDuration(int $trial_period_duration);
    
    /**
     * Get expiration
     * 
     * @return \PagSeguro\Contracts\PreApprovals\Plan\Expiration
     */
    public function getExpiration();
    
    /**
     * Set expiration
     * 
     * @param \PagSeguro\Contracts\PreApprovals\Plan\Expiration $expiration
     * @return $this
     */
    public function setExpiration(Expiration $expiration);
    
    /**
     * Get details
     * 
     * @return string
     */
    public function getDetails() : string;
    
    /**
     * Set details
     * 
     * @param string $details
     * @return $this
     */
    public function setDetails(string $details);
    
    /**
     * Get initial date
     * 
     * @return \DateTime
     */
    public function getInitialDate();
    
    /**
     * Set initial date
     * 
     * @param \DateTime $initial_date
     * @return $this
     */
    public function setInitialDate(DateTime $initial_date);
    
    /**
     * Get final date
     * 
     * @return \DateTime
     */
    public function getFinalDate();
    
    /**
     * Set final date
     * 
     * @param \DateTime $final_date
     * @return $this
     */
    public function setFinalDate(DateTime $final_date);
    
    /**
     * Get day of year
     * 
     * @return string
     */
    public function getDayOfYear() : string;
    
    /**
     * Set day of year
     * 
     * @param string $day_of_year
     * @return $this
     */
    public function setDayOfYear(string $day_of_year);
    
    /**
     * Get day of month
     * 
     * @return string
     */
    public function getDayOfMonth() : string;
    
    /**
     * Set day of month
     * 
     * @param string $day_of_month
     * @return $this
     */
    public function setDayOfMonth(string $day_of_month);
    
    /**
     * Get day of week
     * 
     * @return string
     */
    public function getDayOfWeek() : string;
    
    /**
     * Set day of week
     * 
     * @param string $day_of_week
     * @return $this
     */
    public function setDayOfWeek(string $day_of_week);
    
    /**
     * Get cancel URL
     * 
     * @return string
     */
    public function getCancelURL() : string;
    
    /**
     * Set cancel URL
     * 
     * @param string $cancel_url
     * @return $this
     */
    public function setCancelURL(string $cancel_url);
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray();
}