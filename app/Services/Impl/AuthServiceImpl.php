<?php 

namespace App\Services\Impl;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
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
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $this->repository->register($user);
    }

    public function login(LoginRequest $request) {
        if(!Auth::attempt($request->all()))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $tokenResult = $this->repository->createExpiredToken($request->user());
        return $tokenResult;
    }
}