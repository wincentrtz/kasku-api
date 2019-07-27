<?php

namespace App\Http\Responses\Entity;

use Illuminate\Contracts\Support\Responsable;

class BaseErrorResponse implements Responsable {  
    public $code;
    public $message;

    public function __construct($code, $message) {
        $this->code = $code;
        $this->message = $message;
    }

    public function toResponse()
    {
        return response()->json([
            'code' => $this->code,
            'error' => $this->message,
        ]);
    }

}