<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPageController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::middleware('guest:admin')->group(function () {
            Route::controller(AdminAuthController::class)->group(function () {
                // Route::get('/login', 'login')->name('login');
                Route::get('/login', 'showLoginForm')->name('login');
                Route::post('/login', 'login');
            });
        });

        Route::middleware('auth:admin')->group(function () {

            Route::controller(AdminAuthController::class)->group(function () {
                Route::get('/logout', 'logout')->name('logout');
            });

            Route::controller(AdminPageController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::permanentRedirect('/', '/admin/finance');
                Route::get('/finance', 'finance')->name('finance');
                Route::get('/referral', 'referral')->name('referral');
                Route::get('/competitions', 'competitions')->name('competitions');
                Route::get('/battles', 'battles')->name('battles');
                Route::get('/dashboard', 'dashboard')->name('dashboard');
            });

            Route::controller(AdminController::class)->group(function () {
                Route::get('/{admin}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/{admin}', 'store')->name('store');
                Route::get('/{admin}/edit', 'edit')->name('edit');
                Route::match(['put', 'patch'], '/{admin}', 'update')->name('update');
                Route::delete('/{admin}', 'destroy')->name('destroy');
            });
        });
    });
