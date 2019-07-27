<?php

namespace App\Http\Responses\Entity;

use Illuminate\Contracts\Support\Responsable;

class BaseResponse implements Responsable {  
    public $code;
    public $data;

    public function toResponse()
    {
        return response()->json([
            'code' => $this->code,
            'data' => $this->data->original,
        ]);
    }

}