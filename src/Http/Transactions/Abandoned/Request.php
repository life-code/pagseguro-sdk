<?php

namespace PagSeguro\Http\Transactions\Abandoned;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Transactions\Abandoned\Response;
use PagSeguro\Contracts\Transactions\Interval as IntervalContract;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.7
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Request extends BaseRequest
{
    /**
     * @var \PagSeguro\Contracts\Transactions\Interval
     */
    private $interval = '';
    
    /**
     * Get interval
     * 
     * @retrn \PagSeguro\Contracts\Transactions\Interval
     */
    public function getInterval()
    {
        return $this->interval;
    }
    
    /**
     * Set interval
     * 
     * @param \PagSeguro\Contracts\Transactions\Interval $interval
     * @return $this
     */
    public function setInterval(IntervalContract $interval)
    {
        $this->interval = $interval;
        
        return $this;
    }
    
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return self::GET;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        $initialDate    = $this->getInterval()->getInitialDate()->format('Y-m-d\TH:i');
        $finalDate      = $this->getInterval()->getFinalDate()->format('Y-m-d\TH:i');
        $page           = $this->getInterval()->getPage();
        $maxPageResults = $this->getInterval()->getMaxPageResults();
        
        return $this->env->getUrl() . 'v2/transactions/abandoned?' . 'initialDate=' . $initialDate . '&finalDate=' . $finalDate . '&page=' . $page . '&maxPageResults=' . $maxPageResults . '&' . $this->credentials->toString();
    }
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array
    {
        return [
            'cache-control: no-cache',
        ];
    }
    
    /**
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function createResponse($data, array $info)
    {
        $response = new Response($this->env, 'Transactions');
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $response->setErrors([$data]);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors(['Not Found']);
        }
        
        return $response->setData($data);
    }
}