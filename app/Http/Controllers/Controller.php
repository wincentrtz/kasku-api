<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Responses\Builder\BaseResponseBuilder;

class Controller extends BaseController
{
    protected $responseBuilder;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        $this->responseBuilder = new BaseResponseBuilder();
    }

}
