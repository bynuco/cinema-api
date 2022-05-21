<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth:api')->group(function () {
    Route::get('/cities', [CityController::class, 'index']);
    Route::get('/cities/{id}/cinemas', [CityController::class, 'getCinemasByCityId']);
});
