<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\PublicViewController;
use App\Http\Controllers\ReservationController;

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
    return view('publicViews.landing_page');
});


Route::get('dashboard',function(){
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('roomdetails/{id}',[PublicViewController::class,'roomdetails'])->name('room.details');


Route::get('halls/delete/{id}',[HallController::class,'delete'])->name('halls.delete');
Route::get('halls/softdelete',[HallController::class,'SoftDelete'])->name('halls.softdelete');
Route::get('halls/restore/{id}',[HallController::class,'restore'])->name('halls.restore');
Route::get('halls/forcedelete/{id}',[HallController::class,'forcedelete'])->name('halls.forcedelete');
Route::resource('halls', HallController::class);


Route::get('services/delete/{id}',[ServiceController::class,'delete'])->name('services.delete');
Route::get('services/softdelete',[ServiceController::class,'SoftDelete'])->name('services.softdelete');
Route::get('services/restore/{id}',[ServiceController::class,'restore'])->name('services.restore');
Route::get('services/forcedelete/{id}',[ServiceController::class,'forcedelete'])->name('services.forcedelete');
Route::resource('services', ServiceController::class);


Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');
Route::get('users/softdelete',[UserController::class,'SoftDelete'])->name('users.softdelete');
Route::get('users/restore/{id}',[UserController::class,'restore'])->name('users.restore');
Route::get('users/forcedelete/{id}',[UserController::class,'forcedelete'])->name('users.forcedelete');
Route::resource('users', UserController::class);



Route::get('employees/delete/{id}',[employeeController::class,'delete'])->name('employees.delete');
Route::get('employees/softdelete',[ServiceController::class,'SoftDelete'])->name('employees.softdelete');
Route::get('employees/restore/{id}',[ServiceController::class,'restore'])->name('employees.restore');
Route::get('employees/forcedelete/{id}',[ServiceController::class,'forcedelete'])->name('employees.forcedelete');
Route::resource('employees', employeeController::class);



Route::get('reservations/delete/{id}', [ReservationController::class,'delete'])->name('reservations.delete');
Route::get('reservations/calender', [ReservationController::class,'getCalender'])->name('reservations.getCalender');
Route::get('reservations/reservation_waiting', [ReservationController::class,'reservation_waiting'])->name('reservations.reservation_waiting');
Route::get('reservations/reservation_waiting/{id}', [ReservationController::class,'reservationApproved'])->name('reservations.reservationApproved');
Route::get('reservations/reservationcancelled/{id}', [ReservationController::class,'reservationcancelled'])->name('reservations.reservationcancelled');
Route::resource('reservations', ReservationController::class);



