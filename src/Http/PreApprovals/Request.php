<?php

namespace PagSeguro\Http\PreApprovals;

use PagSeguro\Http\Request as BaseRequest;
use PagSeguro\Http\PreApprovals\Response;

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
        return $this->env->getUrl() . 'pre-approvals?' . $this->credentials->toString();
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
            'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1',
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
            return $response->setErrors($data);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors('Not Found');
        }
        
        return $response->setData($data);
    }
}