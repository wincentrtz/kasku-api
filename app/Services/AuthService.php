<?php 

namespace App\Services;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;

interface AuthService
{
    public function register(RegisterRequest $request);
    public function login(LoginRequest $request);
}