<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('halls', HallController::class);
Route::get('halls/delete/{id}',[HallController::class,'delete'])->name('halls.delete');

Route::resource('services', ServiceController::class);
Route::get('services/delete/{id}',[ServiceController::class,'delete'])->name('services.delete');

Route::resource('users', UserController::class);
Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');

Route::resource('employees', employeeController::class);
Route::get('employees/delete/{id}',[employeeController::class,'delete'])->name('employees.delete');
