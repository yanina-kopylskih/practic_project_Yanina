<?php

namespace App\Http\Controllers\User;

use App\Services\User\Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
