<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReligionController;


// 
Route::get('/', [PublicController::class, 'index'])->name('public-index');

// 
Route::resource('admin/religion/', ReligionController::class);
Route::get('/religion-data', [ReligionController::class, 'anyData'])->name('religion-data');
Route::delete('/admin/religion/delete/{religion}', [ReligionController::class, 'destroy']);


Route::get('login/', [AuthenticationController::class, 'index'])->name('login');
Route::post('login/', [AuthenticationController::class, 'login'])->name('login');

// Route::get('admin/people/', [PeopleController::class, 'index']);
Route::resource('admin/people/', PeopleController::class);
Route::get('/people-data', [PeopleController::class, 'anyData'])->name('people-data');
Route::get('/admin/people/{people}', [PeopleController::class, 'show']);


Route::resource('admin/position/', PositionController::class);
Route::get('/position-data', [PositionController::class, 'anyData'])->name('position-data');
Route::delete('/admin/department/delete/{department}', [DepartmentController::class, 'destroy']);


Route::resource('/admin/department/', DepartmentController::class);
Route::get('/admin/department/{department}', [DepartmentController::class, 'show']);
Route::delete('/admin/department/delete/{department}', [DepartmentController::class, 'destroy']);
Route::get('/department-data', [DepartmentController::class, 'anyData'])->name('department-data');


Route::resource('admin/menu/', MenuController::class);
Route::get('/menu-data', [MenuController::class, 'anyData'])->name('menu-data');


Route::middleware(['islogin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index']);

});
