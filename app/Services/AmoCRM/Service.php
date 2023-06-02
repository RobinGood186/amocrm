<?php

namespace App\Services\AmoCRM;

use Illuminate\Support\Facades\Http;

class Service
{
    public function getToken()
    {
        $response = Http::post('https://' . config('amocrm.domain') . '.amocrm.ru/oauth2/access_token', [
            'client_id' => config('amocrm.client_id'),
            'client_secret' => config('amocrm.client_secret'),
            'grant_type' => 'authorization_code',
            'code' => config('amocrm.code'),
            'redirect_uri' => config('amocrm.redirect_uri'),
        ]);
        file_put_contents('../tokenAmoCRM.txt', $response->json('access_token'));
    }


}
