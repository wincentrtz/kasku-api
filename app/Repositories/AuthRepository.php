<?php 

namespace App\Repositories;

use App\Http\Requests\RegisterRequest;

interface AuthRepository
{
    public function register(RegisterRequest $request);
}