<?php

namespace App\Http\Controllers\AmoCRM;

use App\Http\Requests\AmoCRM\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, User $user)
    {
        $data = $request->validated(); // Валидация данных с формочки
        $user->createRequest($data); // Добавление в бд

        $this->service->MethodLeadsComplex($data); // Отправка данных в АмосСРМ
        $this->service->MethodTasks($data); // Добавление задачи в АмоСРМ
        Log::info('Создана сделка, добавлен контакт, добавлена задача: Имя ' . $data['name'].', телефон: '.$data['tel']); // Логирование
        return view('amocrm.index');
    }
}
