<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');})
    ->middleware('guest')
    ->name('password.request');


#https://laravel.com/docs/8.x/passwords#password-reset-link-handling-the-form-submission
Route::post('forgot-password', function (Request $request){
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);

})->middleware('guest')->name('password.email');

require __DIR__.'/auth.php';


