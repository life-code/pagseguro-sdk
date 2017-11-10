<?php

namespace PagSeguro\Http;

/**
 * PagSeguro SDK
 * 
 * @type        library
 * @version     0.8.6
 * @package     life-code/pagseguro-sdk
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
trait RequestBuilder
{
    /**
     * Send request
     * 
     * @return \PagSeguro\Contracts\Http\Response
     */
    public function send()
    {
        $curl = curl_init($this->getUrl());
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->getMethod());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        
        if ($this->getData()) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($this->getData()));
        }
        
        $data = curl_exec($curl);
        $info = curl_getinfo($curl);
        
        curl_close($curl);
        
        return $this->createResponse($data, $info);
    }
}