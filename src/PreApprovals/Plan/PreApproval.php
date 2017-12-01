<?php

namespace PagSeguro\PreApprovals\Plan;

use PagSeguro\Contracts\PreApprovals\Plan\PreApproval as PreApprovalContract;
use PagSeguro\Contracts\PreApprovals\Plan\Expiration;
use PagSeguro\PreApprovals\Plan\Type;
use PagSeguro\Exceptions\PagseguroException;
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
class PreApproval implements PreApprovalContract
{
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $charge;
    
    /**
     * @var string
     */
    private $period;
    
    /**
     * @var float
     */
    private $amount_per_payment;
    
    /**
     * @var float
     */
    private $max_amount_per_period;
    
    /**
     * @var float
     */
    private $max_amount_per_payment;
    
    /**
     * @var float
     */
    private $max_total_amount;
    
    /**
     * @var int
     */
    private $max_payments_per_period;
    
    /**
     * @var int
     */
    private $membership_fee;
    
    /**
     * @var int
     */
    private $trial_period_duration;
    
    /**
     * @var \PagSeguro\Contracts\PreApprovals\Plan\Expiration
     */
    private $expiration;
    
    /**
     * @var string
     */
    private $details;
    
    /**
     * @var \DateTime
     */
    private $initial_date;
    
    /**
     * @var \DateTime
     */
    private $final_date;
    
    /**
     * @var string
     */
    private $day_of_year;
    
    /**
     * @var string
     */
    private $day_of_month;
    
    /**
     * @var string
     */
    private $day_of_week;
    
    /**
     * @var string
     */
    private $cancel_url;
    
    /**
     * Get name
     * 
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    
    /**
     * Set name
     * 
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get charge
     * 
     * @return int
     */
    public function getCharge() : int
    {
        return $this->charge;
    }

    /**
     * Set charge
     * 
     * @param string $charge
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setCharge(string $charge)
    {
        if (!Type::check($charge)) {
            throw new PagseguroException("The [$charge] isn't a valid charge.");
        }
        
        $this->charge = $charge;
        
        return $this;
    }
    
    /**
     * Get period
     * 
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }

    /**
     * Set period
     * 
     * @param string $period
     * @throws \PagSeguro\Exceptions\PagseguroException
     * @return $this
     */
    public function setPeriod(string $period)
    {
        if (!Type::check($period)) {
            throw new PagseguroException("The [$period] isn't a valid period.");
        }
        
        $this->period = $period;
        
        return $this;
    }
    
    /**
     * Get amount per payment
     * 
     * @return string
     */
    public function getAmountPerPayment() : string
    {
        return (string) $this->amount_per_payment;
    }
    
    /**
     * Set amount per payment
     * 
     * @param float $amount_per_payment
     * @return $this
     */
    public function setAmountPerPayment(float $amount_per_payment)
    {
        $this->amount_per_payment = number_format($amount_per_payment, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get max amount per period
     * 
     * @return string
     */
    public function getMaxAmountPerPeriod() : string
    {
        return (string) $this->max_amount_per_period;
    }
    
    /**
     * Set max amount per period
     * 
     * @param float $max_amount_per_period
     * @return $this
     */
    public function setMaxAmountPerPeriod(float $max_amount_per_period)
    {
        $this->max_amount_per_period = number_format($max_amount_per_period, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get max amount per payment
     * 
     * @return string
     */
    public function getMaxAmountPerPayment() : string
    {
        return (string) $this->max_amount_per_payment;
    }
    
    /**
     * Set max amount per payment
     * 
     * @param float $max_amount_per_payment
     * @return $this
     */
    public function setMaxAmountPerPayment(float $max_amount_per_payment)
    {
        $this->max_amount_per_payment = number_format($max_amount_per_payment, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get max total amount
     * 
     * @return string
     */
    public function getMaxTotalAmount() : string
    {
        return (string) $this->max_total_amount;
    }
    
    /**
     * Set max total amount
     * 
     * @param float $max_total_amount
     * @return $this
     */
    public function setMaxTotalAmount(float $max_total_amount)
    {
        $this->max_total_amount = number_format($max_total_amount, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get max payments per period
     * 
     * @return string
     */
    public function getMaxPaymentsPerPeriod() : string
    {
        return (string) $this->max_payments_per_period;
    }
    
    /**
     * Set max payments per period
     * 
     * @param float $max_payments_per_period
     * @return $this
     */
    public function setMaxPaymentsPerPeriod(float $max_payments_per_period)
    {
        $this->max_payments_per_period = number_format($max_payments_per_period, 2, '.', '');
        
        return $this;
    }
    
    /**
     * Get membership fee
     * 
     * @return int
     */
    public function getMembershipFee() : int
    {
        return $this->membership_fee;
    }
    
    /**
     * Set membership fee
     * 
     * @param int $membership_fee
     * @return $this
     */
    public function setMembershipFee(int $membership_fee)
    {
        $this->membership_fee = $membership_fee;
        
        return $this;
    }
    
    /**
     * Get trial period duration
     * 
     * @return int
     */
    public function getTrialPeriodDuration() : int
    {
        return $this->trial_period_duration;
    }
    
    /**
     * Set trial period duration
     * 
     * @param int $trial_period_duration
     * @return $this
     */
    public function setTrialPeriodDuration(int $trial_period_duration)
    {
        $this->trial_period_duration = $trial_period_duration;
        
        return $this;
    }
    
    /**
     * Get expiration
     * 
     * @return \PagSeguro\Contracts\PreApprovals\Plan\Expiration
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
    
    /**
     * Set expiration
     * 
     * @param \PagSeguro\Contracts\PreApprovals\Plan\Expiration $expiration
     * @return $this
     */
    public function setExpiration(Expiration $expiration)
    {
        $this->expiration = $expiration;
        
        return $this;
    }
    
    /**
     * Get details
     * 
     * @return string
     */
    public function getDetails() : string
    {
        return $this->details;
    }
    
    /**
     * Set details
     * 
     * @param string $details
     * @return $this
     */
    public function setDetails(string $details)
    {
        $this->details = $details;
        
        return $this;
    }
    
    /**
     * Get initial date
     * 
     * @return \DateTime
     */
    public function getInitialDate()
    {
        return $this->initial_date;
    }
    
    /**
     * Set initial date
     * 
     * @param \DateTime $initial_date
     * @return $this
     */
    public function setInitialDate(DateTime $initial_date)
    {
        $this->initial_date = $initial_date;
        
        return $this;
    }
    
    /**
     * Get final date
     * 
     * @return \DateTime
     */
    public function getFinalDate()
    {
        return $this->final_date;
    }
    
    /**
     * Set final date
     * 
     * @param \DateTime $final_date
     * @return $this
     */
    public function setFinalDate(DateTime $final_date)
    {
        $this->final_date = $final_date;
        
        return $this;
    }
    
    /**
     * Get day of year
     * 
     * @return string
     */
    public function getDayOfYear() : string
    {
        return $this->day_of_year;
    }
    
    /**
     * Set day of year
     * 
     * @param string $day_of_year
     * @return $this
     */
    public function setDayOfYear(string $day_of_year)
    {
        $this->day_of_year = $day_of_year;
        
        return $this;
    }
    
    /**
     * Get day of month
     * 
     * @return string
     */
    public function getDayOfMonth() : string
    {
        return $this->day_of_month;
    }
    
    /**
     * Set day of month
     * 
     * @param string $day_of_month
     * @return $this
     */
    public function setDayOfMonth(string $day_of_month)
    {
        $this->day_of_month = $day_of_month;
        
        return $this;
    }
    
    /**
     * Get day of week
     * 
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->day_of_week;
    }
    
    /**
     * Set day of week
     * 
     * @param string $day_of_week
     * @return $this
     */
    public function setDayOfWeek(string $day_of_week)
    {
        $this->day_of_week = $day_of_week;
        
        return $this;
    }
    
    /**
     * Get cancel URL
     * 
     * @return string
     */
    public function getCancelURL() : string
    {
        return $this->cancel_url;
    }
    
    /**
     * Set cancel URL
     * 
     * @param string $cancel_url
     * @return $this
     */
    public function setCancelURL(string $cancel_url)
    {
        $this->cancel_url = $cancel_url;
        
        return $this;
    }
    
    /**
     * Get all attributes to convert array
     * 
     * @return array
     */
    public function toArray()
    {
        $response = [
    		'name': $this->getName(),
    		'charge': $this->getCharge(),
    		'period': $this->getPeriod(),
    		'amountPerPayment': $this->getAmountPerPayment(),
    	];
    	
    	if ($this->getMembershipFee()) {
    	    $response = ['membershipFee'] = $this->getMembershipFee();
    	}
    	
    	if ($this->getTrialPeriodDuration()) {
    	    $response = ['trialPeriodDuration'] = $this->getTrialPeriodDuration();
    	}
    	
    	if ($this->getExpiration()) {
    	    $response = ['expiration'] = $this->getExpiration()->toArray();
    	}
    	
    	if ($this->getDetails()) {
    	    $response = ['details'] = $this->getDetails();
    	}
    	
    	if ($this->getMaxAmountPerPeriod()) {
    	    $response = ['MaxAmountPerPeriod'] = $this->getMaxAmountPerPeriod();
    	}
    	
    	if ($this->getAmountPerPayment()) {
    	    $response = ['MaxAmountPerPayment'] = $this->getAmountPerPayment();
    	}
    	
    	if ($this->getMaxTotalAmount()) {
    	    $response = ['MaxTotalAmount'] = $this->getMaxTotalAmount();
    	}
    	
    	if ($this->getMaxPaymentsPerPeriod()) {
    	    $response = ['MaxPaymentsPerPeriod'] = $this->getMaxPaymentsPerPeriod();
    	}
    	
    	if ($this->getInitialDate()) {
    	    $response = ['initialDate'] = $this->getInitialDate();
    	}
    	
    	if ($this->getFinalDate()) {
    	    $response = ['finalDate'] = $this->getFinalDate();
    	}
    	
    	if ($this->getDayOfYear()) {
    	    $response = ['dayOfYear'] = $this->getDayOfYear();
    	}
    	
    	if ($this->getDayOfMonth()) {
    	    $response = ['dayOfMonth'] = $this->getDayOfMonth();
    	}
    	
    	if ($this->getDayOfWeek()) {
    	    $response = ['dayOfWeek'] = $this->getDayOfWeek();
    	}
    	
    	if ($this->getCancelURL()) {
    	    $response = ['cancelURL'] = $this->getCancelURL();
    	}
    	
    	return $response;
    }
}