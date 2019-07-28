<?php 

namespace App\Services;

use App\Http\Requests\Auth\RegisterRequest;

interface AuthService
{
    public function register(RegisterRequest $request);
}