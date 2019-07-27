<?php

namespace App\Http\Responses\Entity\Auth;

use Illuminate\Contracts\Support\Responsable;

use App\Http\Responses\BaseResponse;
use App\Http\Responses\Auth\Data;

class RegisterResponse implements Responsable {
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function toResponse()
    {
        return response()->json([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }

}