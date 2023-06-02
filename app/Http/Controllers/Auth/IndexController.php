<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AmoCRM\BaseController;
use Illuminate\Support\Facades\Log;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $this->service->getToken();
        Log::info('Токен получен');
    }
}
