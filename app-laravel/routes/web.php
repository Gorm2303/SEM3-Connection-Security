<?php

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

Route::post('/forgot-password', function (){
    return redirect()->route('index')->with('success', 'Email send to '. request('email'));
})->name('email');

require __DIR__.'/auth.php';


