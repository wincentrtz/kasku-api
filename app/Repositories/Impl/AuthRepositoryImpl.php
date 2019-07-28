<?php 

namespace App\Repositories\Impl;

use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\AuthRepository;
use App\User;

class AuthRepositoryImpl implements AuthRepository
{
    protected $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    public function register(RegisterRequest $request) {
       $this->model->create($request->all());
    }
}