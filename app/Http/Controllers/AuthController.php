<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

use App\Http\Responses\Entity\Auth\RegisterResponse;
use App\Http\Responses\Entity\Auth\LoginResponse;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $service;
    public function __construct(AuthService $service)
    {
        parent::__construct();
        $this->service = $service;
    }
    
    public function signup(RegisterRequest $request)
    {
        $request->validated();
        $this->service->register($request);
        return $this->responseBuilder
                ->code(Response::HTTP_CREATED)
                ->data((new RegisterResponse($request->name, $request->email))->toResponse())
                ->build()
                ->toResponse();
    }
    
    public function login(LoginRequest $request)
    {
        $request->validated();
        $tokenResult = $this->service->login($request);
        return $this->responseBuilder
                ->code(Response::HTTP_OK)
                ->data((new LoginResponse($tokenResult->accessToken, $tokenResult->token->expires_at))->toResponse())
                ->build()
                ->toResponse();
    }
  
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}