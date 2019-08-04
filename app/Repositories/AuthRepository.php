<?php 

namespace App\Repositories;

use App\User;

interface AuthRepository
{
    public function register(User $user);
    public function createExpiredToken(User $user);
}