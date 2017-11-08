<?php

namespace PagSeguro\Http\PreApprovals;

use PagSeguro\Http\Response as BaseResponse;

class Response extends BaseResponse
{
    /**
     * Set data
     * 
     * @return $this
     */ 
    public function setData($data)
    {
        $data = json_decode($data);
        
        if (isset($data->error) && $data->error) {
            return $this->setErrors($data->errors);
        }
        
        $this->data = $data;
        
        return $this;
    }
}