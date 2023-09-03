<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| teacher Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:teacher']
    ], function(){

    Route::get('teacher/dashboard', function () {
        return view('Teachers.dashboard');
    });






///////////admin prefix
    Route::prefix('teacher')->group(function () {

        ///////////profile
        Route::controller(\App\Http\Controllers\Teachers\ProfileController::class)->group(function () {
            Route::get('/Profile', 'index')->name('TProfile');
        Route::post('/ProfileIMGURL', 'ProfilePicEdit')->name('TProfileImageUrl');
        Route::post('/ProfileIMGURLE', 'ProfilePicEditE')->name('TProfileImageUrlE');
        Route::post('/ProfilePassword', 'ProfilePassword')->name('TProfilePassword');
        });
        //////////end

    });





});
