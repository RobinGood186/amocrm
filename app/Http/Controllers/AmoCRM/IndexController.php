<?php

namespace App\Http\Controllers\AmoCRM;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('amocrm.index');
    }
}
