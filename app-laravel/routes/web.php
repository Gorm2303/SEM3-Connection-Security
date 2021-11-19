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

Route::get('/forgot-password', function (){
    return view('auth.forgot-password');})
    ->name('forgot-password');

Route::post('/forgot-password', [MailController::class, 'html_email'])
    ->name('mail');

# Route::get('/email',[MailController::class, 'html_email']);
Route::post('/mail', [MailController::class, 'html_email']);



require __DIR__.'/auth.php';


