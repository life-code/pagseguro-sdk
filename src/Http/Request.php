<?php

namespace PagSeguro\Http;

use PagSeguro\Http\RequestBuilder;
use PagSeguro\Contracts\Http\Request as RequestContract;
use PagSeguro\Credentials\AccountCredentials;
use PagSeguro\Credentials\Environment;

abstract class Request implements RequestContract
{
    use RequestBuilder;
    
    /**
     * @var strint
     */
    const POST = 'POST';
    
    /**
     * @var strint
     */
    const PUT = 'PUT';
    
    /**
     * @var strint
     */
    const GET = 'GET';
    
    /**
     * @var strint
     */
    const DELETE = 'DELETE';
    
    /**
     * @var strint
     */
    const JSON = 'application/json';
    
    /**
     * @var strint
     */
    const XML = 'application/xml';
    
    /**
     * @var \PagSeguro\Credentials\AccountCredentials
     */
    protected $credentials;
    
    /**
     * @var \PagSeguro\Credentials\Environment
     */
    protected $env;
    
    /**
     * Make new instance of this class
     * 
     * @param \PagSeguro\Credentials\AccountCredentials $credentials
     * @param \PagSeguro\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Get request data
     * 
     * @return array
     */
    public function getData() : array
    {
        return [];
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