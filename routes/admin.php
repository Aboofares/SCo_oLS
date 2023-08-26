<?php

use App\Http\Controllers\Admins\ProfileController;
use App\Http\Controllers\Admins\Settings\StageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:admin']
    ], function(){

    Route::get('admin/dashboard', function () {
        return view('Admins.dashboard');
    })->name('Admindashboard');

///////////stages
    Route::prefix('admin')->group(function () {
        Route::controller(StageController::class)->group(function () {
            Route::get('/settings/stages', 'index')->name('stagesIndex');
            Route::post('/settings/AdStage', 'store')->name('AddStage');
            Route::post('/settings/EdStage', 'update')->name('EditStage');
            Route::post('/settings/DeStage', 'destroy')->name('DeleteStage');
        });
        //////////end
        ///
        ///////////profile
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/Profile', 'index')->name('Profile');
        });
        //////////end



    });

});
