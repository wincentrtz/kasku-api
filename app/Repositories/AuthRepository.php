<?php 

namespace App\Repositories;

use App\Http\Requests\Auth\RegisterRequest;

interface AuthRepository
{
    public function register(RegisterRequest $request);
}