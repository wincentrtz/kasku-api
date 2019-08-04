<?php 

namespace App\Repositories\Impl;

use Carbon\Carbon;

use App\Repositories\AuthRepository;
use App\User;

class AuthRepositoryImpl implements AuthRepository
{
    protected $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    public function register(User $user) {
       $this->model->create($user->getAttributes());
    }

    public function createExpiredToken(User $user) {
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return $tokenResult;
    }
}