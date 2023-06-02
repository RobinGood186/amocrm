<?php

namespace App\Http\Controllers\AmoCRM;

use App\Http\Requests\AmoCRM\StoreRequest;
use App\Models\User;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, User $user)
    {
        $data = $request->validated(); // Валидация данных с формочки
        $user->createRequest($data); // Добавление в бд

        return view('amocrm.index');
    }
}
