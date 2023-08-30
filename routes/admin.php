<?php

use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\ProfileController;
use App\Http\Controllers\Admins\Settings\ClassroomController;
use App\Http\Controllers\Admins\Settings\GradeController;
use App\Http\Controllers\Admins\Settings\RoleController;
use App\Http\Controllers\Admins\Settings\StageController;
use App\Http\Controllers\Admins\Settings\TeacherClassroomController;
use App\Http\Controllers\Admins\Teachers\TeacherController;
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

///////////admin prefix
    Route::prefix('admin')->group(function () {

///////////Stage->middleware('can:stages')['middleware' => ['can:stages']],
        Route::controller(StageController::class)->group(function () {
            Route::get('/settings/stages', 'index')->name('stagesIndex')->middleware('can:brands');
            Route::post('/settings/AdStage', 'store')->name('AddStage');
            Route::post('/settings/EdStage', 'update')->name('EditStage');
            Route::post('/settings/DeStage', 'destroy')->name('DeleteStage');
        });
////////end

//        Route::group(['prefix' => 'brands', 'middleware' => 'can:brands'], function () {
//            Route::controller(StageController::class)->group(function () {
//                Route::get('/settings/stages', 'index')->name('stagesIndex') ;
//                Route::post('/settings/AdStage', 'store')->name('AddStage');
//                Route::post('/settings/EdStage', 'update')->name('EditStage');
//                Route::post('/settings/DeStage', 'destroy')->name('DeleteStage');
//            });
//        });



  Route::view('/students','livewire.students.studentIndex')->name('students');

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
            Route::post('/ProfilePassword', 'ProfilePassword')->name('ProfilePassword');
        });
//////////end

///////////Teacher
Route::controller(TeacherController::class)->group(function () {
Route::get('/Teachers', 'index')->name('TeachersIndex');
    Route::get('/Teachers/create', 'create')->name('TeachersCreate');
    Route::post('/Teachers/store', 'store')->name('TeachersStore');
    Route::get('/Teachers/edit/{id}', 'edit')->name('TeachersEdit');
    Route::post('/Teachers/update', 'update')->name('TeachersUpdate');
    Route::post('/Teachers/delete/{id}', 'destroy')->name('TeachersDel');
});
//////////end

///////////employees
        Route::controller(AdminController::class)->group(function () {
            Route::get('/employees', 'index')->name('employeesIndex');
            Route::get('/employees/create', 'create')->name('employeesCreate');
            Route::post('/employees/store', 'store')->name('employeesStore');
            Route::get('/employees/edit/{id}', 'edit')->name('employeesEdit');
            Route::post('/employees/update', 'update')->name('employeesUpdate');
            Route::post('/employees/delete/{id}', 'destroy')->name('employeesDel');
        });
//////////end


        ///////////employees
        Route::controller(TeacherClassroomController::class)->group(function () {
            Route::get('/TeachersClassroom', 'index')->name('TeachersClassroom');
            Route::post('/TeachersClassroom/store', 'store')->name('TeachersClassroomStore');
            Route::post('/TeachersClassroom/update', 'update')->name('TeachersClassroomUpdate');
        });
//////////end


        ///////////RoleController
        Route::controller(RoleController::class)->group(function () {
            Route::get('/roles', 'index')->name('rolesIndex');
            Route::post('/roles/store', 'store')->name('rolesStore');
            Route::post('/roles/update', 'update')->name('rolesUpdate');
            Route::post('/roles/delete', 'destroy')->name('rolesDel');
        });
//////////end

    });

});
