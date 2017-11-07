<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Request as RequestContract;

abstract class Request implements RequestContract
{
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
}