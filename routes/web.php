<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// можно сделать кнопочку для получения ключа на сайте в супер-админ панеле к примеру, тогда через POST сделать можно
Route::get('/get_token',\App\Http\Controllers\Auth\IndexController::class);

Route::get('/',\App\Http\Controllers\AmoCRM\IndexController::class)->name('amocrm.index');
Route::post('/',\App\Http\Controllers\AmoCRM\StoreController::class)->name('amocrm.store');
