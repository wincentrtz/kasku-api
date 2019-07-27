<?php

namespace App\Http\Responses\Builder;

use App\Http\Responses\Entity\BaseResponse;

class BaseResponseBuilder
{
    private $base;
    
    public function __construct()
    {
        $this->base = new BaseResponse;
    }

    public function code($code)
    {
        $this->base->code = $code;
        return $this;
    }

    public function data($data)
    {
        $this->base->data = $data;
        return $this;
    }

    public function build()
    {
        return $this->base;
    }
}