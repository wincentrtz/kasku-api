<?php 

namespace App\Services\Impl;

use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\AuthRepository;
use App\Services\AuthService;
use App\User;

class AuthServiceImpl implements AuthService
{
    protected $repository;
    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register(RegisterRequest $request) {
       $this->repository->register($request);
    }
}