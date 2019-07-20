<?php 

namespace App\Services;

use App\Http\Requests\RegisterRequest;

interface AuthService
{
    public function register(RegisterRequest $request);
}