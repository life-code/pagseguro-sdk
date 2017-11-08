<?php

namespace PagSeguro\Contracts\Http;

interface Response
{
    /**
     * Get status
     * 
     * @return int
     */
    public function getStatus() : int;
    
    /**
     * Set status
     * 
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status);
    
    /**
     * Get all data
     * 
     * @return array
     */
    public function all() : array;
    
    /**
     * Get error
     * 
     * @return array
     */
    public function getErrors() : array;
    
    /**
     * Has errors
     * 
     * @return bool
     */
    public function hasErrors() : bool;
    
    /**
     * Set error
     * 
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors);
    
    /**
     * Get info
     * 
     * @return array
     */
    public function getInfo() : array;
    
    /**
     * Set info
     * 
     * @param array $info
     * @return array
     */
    public function setInfo(array $info);
    
    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key);

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @return json
     */
    public function __toString();
}