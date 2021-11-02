<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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
Route::get('/', [MainController::class, "index"])->name("index");


Route::get('/login', [UserController::class, "login"])->name("user.login");
Route::get('/register', [UserController::class, "register"])->name("user.register");

Route::post('/user/check', [UserController::class, "check"])->name("user.check");
Route::post('/user/create', [UserController::class, "create"])->name("user.create");




