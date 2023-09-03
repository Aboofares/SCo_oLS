<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Auth::routes();








Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:web']
    ], function(){


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});








////////////////////
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){

    Route::get('/', function () {
        return view('WebSite.Hwebsite');
    });

    Route::get('/nw', function () {
        return view('WebSite.Index');
    });

    Route::get('/selection', [App\Http\Controllers\HomeController::class, 'index'])->name('selection');

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login/{type}', 'loginForm')->middleware('guest')->name('login.show');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout/{type}', 'logout')->name('logout');
    });
});
//////////////
