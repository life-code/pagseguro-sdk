<?php

namespace PagSeguro\Http\Notifications;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Notifications\Response;

class Request extends BaseRequest
{
    /**
     * @var string
     */
    private $code = '';
    
    /**
     * Get code
     * 
     * @retrn string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * Set code
     * 
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        
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
        return $this->env->getUrl() . '/pre-approvals/' . $this->getCode() . '?' . $this->credentials->toString();
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
            'Content-Type: ' . self::JSON,
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
        $response = new Response();
        
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