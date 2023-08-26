<?php

use App\Http\Controllers\Admins\ProfileController;
use App\Http\Controllers\Admins\Settings\ClassroomController;
use App\Http\Controllers\Admins\Settings\GradeController;
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
        ///////////grade
        Route::controller(GradeController::class)->group(function () {
            Route::get('/settings/grades', 'index')->name('gradesIndex');
            Route::post('/settings/Adgrade', 'store')->name('AddGrade');
            Route::post('/settings/Edgrade', 'update')->name('EditGrade');
            Route::post('/settings/Degrade', 'destroy')->name('DeleteGrade');

            Route::post('/settings/GradesDelete_all', 'delete_all')->name('delete_all');
            Route::post('/settings/GradesFilter', 'Filter_Grades')->name('Filter_Grades');


        });
        //////////end


        /////////Classroom
        Route::controller(ClassroomController::class)->group(function () {
            Route::get('/settings/Classrooms', 'index')->name('ClassroomsIndex');
            Route::post('/settings/AdClassroom', 'store')->name('AddClassroom');
            Route::post('/settings/EdClassroom', 'update')->name('EditClassroom');
            Route::post('/settings/DeClassroom', 'destroy')->name('DeleteClassroom');
            Route::get('/settings/classes/{id}', 'getClasses');
        });
        ////////end




        ///////////profile
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/Profile', 'index')->name('Profile');
            Route::post('/ProfileIMGURL', 'ProfilePicEdit')->name('ProfileImageUrl');
            Route::post('/ProfileIMGURLE', 'ProfilePicEditE')->name('ProfileImageUrlE');
        });
        //////////end





    });

});
