<?php

namespace PagSeguro\Http\Session;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\Session\Response;

class Request extends BaseRequest
{
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return self::POST;
    }
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        return $this->env->getUrl() . 'sessions?' . $this->credentials->toString();
    }
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array
    {
        return [
            'Content-Type: application/xml',
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
        $this->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $this->setErrors($data);
        }
        
        if ($info['http_code'] === 404) {
            return $this->setErrors('Not Found');
        }
        
        return $this->setData($data);
    }
}