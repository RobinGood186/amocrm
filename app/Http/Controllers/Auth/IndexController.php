<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AmoCRM\BaseController;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $this->service->getToken();
    }
}
