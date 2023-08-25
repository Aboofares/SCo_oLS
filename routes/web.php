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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
//
//
//
//
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){
//
////inside language
//
////Dashboard
//    Route::get('/Admins', function () {
//        return view('Admins.dashboard');
//    });
//
//});


////////////////////
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){


    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('selection');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('selection');

    Route::controller(LoginController::class)->group(function () {

        Route::get('/login/{type}', 'loginForm')->middleware('guest')->name('login.show');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout/{type}', 'logout')->name('logout');
    });
});
//////////////
