<?php

namespace PagSeguro\Http;

use PagSeguro\Contracts\Http\Response as ResponseContract;

abstract class Response implements ResponseContract
{
    /**
     * @var int
     */
    protected $status;
    
    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * @var array
     */
    protected $info;
    
    /**
     * @var array
     */
    protected $errors;
    
    /**
     * Get status
     * 
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    
    /**
     * Set status
     * 
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
        
        return $this;
    }
    
    /**
     * Get all data
     * 
     * @return array
     */
    public function all() : array
    {
        return $this->data;
    }
    
    /**
     * Get info
     * 
     * @return array
     */
    public function getInfo() : array
    {
        return $this->info;
    }
    
    /**
     * Set info
     * 
     * @param array $info
     * @return array
     */
    public function setInfo(array $info)
    {
        $this->info = $info;
        
        return $this;
    }
    
    /**
     * Get errors
     * 
     * @return array
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    
    /**
     * Has errors
     * 
     * @return bool
     */
    public function hasErrors() : bool
    {
        return $this->getErrors() ? true : false;
    }
    
    /**
     * Set errors
     * 
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $exchange = [];
        
        foreach ($errors as $key => $value) {
            $exchange[] = (object) [
                'code'  => $key,
                'value' => $value,
            ];
        }
        
        $this->errors = $exchange;
        
        return $this;
    }

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
        return $this->data->$key;
    }

    /**
     * Proxy accessing an attribute onto the response data.
     *
     * @return json
     */
    public function __toString()
    {
        return json_encode($this->data);
    }
}
