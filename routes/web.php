<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PositionController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('admin', [AdminController::class, 'index']);
// Route::get('admin/people/', [PeopleController::class, 'index']);
Route::resource('admin/people/', PeopleController::class);
Route::get('/people-data', [PeopleController::class, 'anyData'])->name('people-data');

Route::resource('admin/position/', PositionController::class);
Route::get('/position-data', [PositionController::class, 'anyData'])->name('position-data');
