<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);
Route::get('login', [AuthController::class, 'login']);
Route::get('forgetpassword', [AuthController::class, 'forgetpassword']);

