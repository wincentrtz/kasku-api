<?php

namespace App\Http\Responses\Entity\Auth;

use Illuminate\Contracts\Support\Responsable;

use Carbon\Carbon;

use App\Http\Responses\BaseResponse;
use App\Http\Responses\Auth\Data;

class LoginResponse implements Responsable {
    private $token;
    private $TOKEN_PREFIX = "BEARER";
    private $expiredAt;

    public function __construct($token, $expiredAt)
    {
        $this->token = $token;
        $this->expiredAt = $expiredAt;
    }

    public function toResponse()
    {
        return response()->json([
            'token' => $this->token,
            'tokenPrefix' => $this->TOKEN_PREFIX,
            'expiredAt' => Carbon::parse($this->expiredAt)->toDateTimeString()
        ]);
    }

}