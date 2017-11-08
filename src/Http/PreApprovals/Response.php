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
        $this->data = json_decode($data);
        
        return $this;
    }
}