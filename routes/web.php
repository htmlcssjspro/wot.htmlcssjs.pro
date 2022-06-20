<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
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


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homePage')->name('home');
    Route::get('/raiting', 'raitingPage')->name('raiting');
    // Route::get('/user', 'userPage')->name('user');
});
Route::permanentRedirect('/home', '/');

Route::prefix('user')
    ->name('user.')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/buygold', 'buygold')->name('buygold');
        Route::get('/goldconfirmation', 'goldconfirmation')->name('goldconfirmation');

        // Route::get('/', 'index')->name('index');
        Route::get('/', 'profile')->name('profile');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{user}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{user}', 'update')->name('update');
        Route::delete('/{user}', 'destroy')->name('destroy');
        Route::get('/{user}/edit', 'edit')->name('edit');
    });

Route::prefix('admin')
    ->name('admin.')
    ->controller(AdminController::class)
    ->group(function () {
        // Route::get('/', 'homePage')->name('home');
        Route::permanentRedirect('/', '/admin/finance');
        Route::get('/finance', 'financePage')->name('finance');
        Route::get('/referral', 'referralPage')->name('referral');
        Route::get('/competition', 'competitionPage')->name('competition');
    });

Route::prefix('competitions')
    ->name('competitions.')
    ->controller(CompetitionController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{competition}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{competition}', 'update')->name('update');
        Route::delete('/{competition}', 'destroy')->name('destroy');
        Route::get('/{competition}/edit', 'edit')->name('edit');
    });

// Route::resorce('/news', NewsController::class);
Route::prefix('news')
    ->name('news.')
    ->controller(NewsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{news}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{news}', 'update')->name('update');
        Route::delete('/{news}', 'destroy')->name('destroy');
        Route::get('/{news}/edit', 'edit')->name('edit');
    });

Route::prefix('posts')
    ->name('posts.')
    ->controller(BlogController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{post}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{post}', 'update')->name('update');
        Route::delete('/{post}', 'destroy')->name('destroy');
        Route::get('/{post}/edit', 'edit')->name('edit');
    });


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/get-gold', function () {
    return view('get-gold');
})->name('get-gold');
Route::get('/get-cash', function () {
    return view('get-cash');
})->name('get-cash');

Route::get('/ref/player', function () {
    return view('ref.player');
})->name('ref-player');
Route::get('/ref/dev', function () {
    return view('ref.dev');
})->name('ref-dev');
Route::get('/instructions', function () {
    return view('instructions');
})->name('instructions');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
