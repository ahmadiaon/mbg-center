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
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitGroupController;
use App\Http\Controllers\VehicleGroupController;
use App\Http\Controllers\VehicleController;

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
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

// unit
Route::get('/unit-data', [UnitController::class, 'anyData'])->name('unit-data');
Route::resource('admin/unit/', UnitController::class);
Route::delete('/admin/unit/delete/{unit}', [UnitController::class, 'destroy']);
Route::get('/admin/unit/{unit}', [UnitController::class, 'show']);
Route::get('/admin/unit-all', [UnitController::class, 'allData']);


// vehicle group
Route::get('/vehicle_group-data', [VehicleGroupController::class, 'anyData'])->name('vehicle_group-data');
Route::delete('/admin/vehicle_group/delete/{vehicle_group}', [VehicleGroupController::class, 'destroy']);
Route::get('/admin/vehicle_group/{vehicle_group}', [VehicleGroupController::class, 'show']);
Route::get('/admin/vehicle_group-all', [VehicleGroupController::class, 'allData']);
Route::post('/admin/vehicle_group/', [VehicleGroupController::class, 'store']);

// vehicle
Route::get('/vehicle-data', [VehicleController::class, 'anyData'])->name('vehicle-data');
Route::delete('/admin/vehicle/delete/{vehicle}', [VehicleController::class, 'destroy']);
Route::get('/admin/vehicle/{vehicle}', [VehicleController::class, 'show']);
Route::get('/admin/vehicle-all', [VehicleController::class, 'allData']);
Route::post('/admin/vehicle/', [VehicleController::class, 'store']);



// unit group
Route::get('/unit_group-data', [UnitGroupController::class, 'anyData'])->name('unit_group-data');
Route::resource('admin/unit_group/', UnitGroupController::class);
Route::delete('/admin/unit_group/delete/{unit_group}', [UnitGroupController::class, 'destroy']);
Route::get('/admin/unit_group/{unit_group}', [UnitGroupController::class, 'show']);
Route::get('/admin/unit_group-all', [UnitGroupController::class, 'allData']);


Route::resource('/admin/position/', PositionController::class);
Route::get('/position-data', [PositionController::class, 'anyData'])->name('position-data');
Route::get('/admin/position/{position}', [PositionController::class, 'show']);
Route::delete('/admin/position/delete/{position}', [PositionController::class, 'destroy']);



Route::resource('/admin/department/', DepartmentController::class);
Route::get('/admin/department/{department}', [DepartmentController::class, 'show']);
Route::delete('/admin/department/delete/{department}', [DepartmentController::class, 'destroy']);
Route::get('/department-data', [DepartmentController::class, 'anyData'])->name('department-data');


Route::resource('admin/menu/', MenuController::class);
Route::get('/menu-data', [MenuController::class, 'anyData'])->name('menu-data');


Route::middleware(['islogin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index']);

});
