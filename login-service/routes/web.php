<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, "index"])
    ->middleware('guest')
    ->name("index");

Route::get('/settings', [SettingsController::class, 'index'])
    ->middleware('auth')
    ->name("settings");


Route::get('/forgot-password', [MailController::class, 'index'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [MailController::class, 'send'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [MailController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('reset-password', [MailController::class, 'update'])
    ->middleware('guest')
    ->name('password-update');


require __DIR__.'/auth.php';


