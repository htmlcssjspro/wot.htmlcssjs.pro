<?php

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\WGAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest:user')->group(function () {
    Route::controller(UserAuthController::class)->group(function () {
        // Route::get('login', 'showLoginForm')->name('login');
        Route::get('login', 'login')->name('login');
        // Route::post('login', 'login');

        Route::get('register', 'register')->name('register');
        // Route::get('register', 'showRegisterForm')->name('register');
        // Route::post('register', 'register');
    });

    Route::controller(WGAuthController::class)->group(function () {
        Route::get('wot/auth/register', 'register')->name('wg-register');
        Route::get('wot/auth/login', 'login')->name('wg-login');
        // Route::get('register', 'create')->name('register');
        // Route::post('register', 'store');
    });
});

Route::middleware('auth:user')->group(function () {
    Route::controller(UserAuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('user')
    ->name('user.')
    ->middleware('auth:user')
    ->group(function () {
        Route::controller(UserPageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::permanentRedirect('/', '/user/profile');
            Route::get('/profile', 'profile')->name('profile');
            Route::get('/buygold', 'buygold')->name('buygold');
            Route::get('/goldconfirmation', 'goldconfirmation')->name('goldconfirmation');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/{user}', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/{user}', 'store')->name('store');
            Route::get('/{user}/edit', 'edit')->name('edit');
            Route::match(['put', 'patch'], '/{user}', 'update')->name('update');
            Route::delete('/{user}', 'destroy')->name('destroy');
        });
    });


Route::get('/get-gold', function () {
    return view('get-gold');
})->name('get-gold');
Route::get('/get-cash', function () {
    return view('get-cash');
})->name('get-cash');
