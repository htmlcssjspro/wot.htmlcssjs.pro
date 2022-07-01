<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\WGAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::controller(WGAuthController::class)->group(function () {
        Route::get('wot/auth/login', 'auth')->name('wgauth');
        // Route::get('register', 'create')->name('register');
        // Route::post('register', 'store');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'create')->name('register');
        Route::post('register', 'store');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store');
    });
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
    ->name('logout');
});
