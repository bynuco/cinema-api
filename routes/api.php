<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CinemaController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\MovieController;
use App\Http\Controllers\API\TicketController;
use Illuminate\Support\Facades\Route;

// AUTH OPERATIONS ROUTES
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth:api')->group(function () {

    // CITIES ROUTES
    Route::controller(CityController::class)->prefix('cities')->group(function () {
        Route::get('/', 'index')->name('cities');
        Route::get('/{city_id}/cinemas', 'getCinemasByCityId')->name('cities.cinemas');
    });

    // CINEMAS ROUTES
    Route::controller(CinemaController::class)->prefix('cinemas')->group(function () {
        Route::get('/{cinema_id}/movies', 'getMovies')->name('cinemas.movies');
    });

    // MOVIES ROUTES
    Route::controller(MovieController::class)->prefix('movies')->group(function () {
        Route::get('/', 'index')->name('movies.index');
        Route::get('/{cinema_movie_id}/seats', 'seats');
    });

    // TICKET ROUTES
    Route::controller(TicketController::class)->prefix('ticket')->group(function () {
        Route::post('/buy', 'buy')->name('ticket.buy');
    });
});
