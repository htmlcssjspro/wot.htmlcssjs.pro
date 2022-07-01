<?php

use App\Http\Controllers\BattleController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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


Route::controller(PageController::class)->group(function () {
    Route::permanentRedirect('/home', '/');
    Route::get('/', 'home')->name('home');

    Route::get('/raiting', 'raiting')->name('raiting');
    Route::get('/instructions', 'instructions')->name('instructions');
    Route::get('/faq', 'faq')->name('faq');

    Route::prefix('referral')
        ->name('referral.')
        ->group(function () {
            Route::get('/', 'referral')->name('index');
            Route::get('/player', 'referralPlayer')->name('player');
            Route::get('/developer', 'referralDeveloper')->name('developer');
        });
});

Route::prefix('competitions')
    ->name('competitions.')
    ->controller(CompetitionController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{competition}', 'show')->name('show');
        Route::delete('/{competition}', 'destroy')->name('destroy');
        Route::match(['put', 'patch'], '/{competition}', 'update')->name('update');
        Route::get('/{competition}/edit', 'edit')->name('edit');
    });

Route::prefix('battles')
    ->name('battles.')
    ->controller(BattleController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{battle}', 'show')->name('show');
        Route::delete('/{battle}', 'destroy')->name('destroy');
        Route::match(['put', 'patch'], '/{battle}', 'update')->name('update');
        Route::get('/{battle}/edit', 'edit')->name('edit');
    });

Route::prefix('news')
    ->name('news.')
    ->controller(NewsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{news}', 'show')->name('show');
        Route::delete('/{news}', 'destroy')->name('destroy');
        Route::match(['put', 'patch'], '/{news}', 'update')->name('update');
        Route::get('/{news}/edit', 'edit')->name('edit');
    });

Route::prefix('posts')
    ->name('posts.')
    ->controller(PostController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{post}', 'show')->name('show');
        Route::delete('/{post}', 'destroy')->name('destroy');
        Route::match(['put', 'patch'], '/{post}', 'update')->name('update');
        Route::get('/{post}/edit', 'edit')->name('edit');
    });
