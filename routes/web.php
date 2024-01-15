<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\PublicViewController;
use App\Http\Controllers\ReservationController;

// use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController ;

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

Route::group(['middleware' => ['auth']], function () {
    //==Admin====================================================================================
    // Routes accessible to the admin role
    Route::group(['middleware' => ['role:admin']], function () {

        // Route::resource('halls', HallController::class);

    });

    //==Organizer====================================================================================
    // Routes accessible to the organizer role
    Route::group(['middleware' => ['role:organizer']], function () {

        Route::get('landingpage',function(){
            return view('publicViews.landing_page');
        });
    });
    //==Auth====================================================================================
    // Routes accessible to all authenticated users
    // Add your common routes here
});

Route::get('/', function () {
    return view('publicViews.landing_page');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Route::get('landingpage',function(){
//     return view('publicViews.landing_page');
// });


Route::get('admin/dashboard',[AdminController::class,'dashboardindex'])->name('admin.dashboard');

Route::get('roomdetails/{id}',[PublicViewController::class,'roomdetails'])->name('room.details');

Route::get('login',function(){
    return view('auth.login');
})->name('login');


Route::get('halls/landingpageHalls',[HallController::class,'landingpageHalls'])->name('halls.landingpageHalls');
Route::get('halls/landingpageHallDetails/{id}',[HallController::class,'landingpageHallDetails'])->name('halls.landingpageHallDetails');
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


Route::get('users/report',[UserController::class,'report'])->name('users.report');
Route::get('users/filter',[UserController::class,'filterReservations'])->name('users.filterReservations');
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



Route::get('reservations/store', [ReservationController::class,'store'])->name('reservations.store_reservation');
Route::get('reservations/reservation_details/{id}', [ReservationController::class,'reservation_details'])->name('reservations.reservation_details');
Route::get('reservations/delete/{id}', [ReservationController::class,'delete'])->name('reservations.delete');
Route::get('reservations/calender', [ReservationController::class,'getCalender'])->name('reservations.getCalender');
Route::get('reservations/reservation_waiting', [ReservationController::class,'reservation_waiting'])->name('reservations.reservation_waiting');
Route::get('reservations/reservation_waiting/{id}', [ReservationController::class,'reservationApproved'])->name('reservations.reservationApproved');
Route::get('reservations/reservationcancelled/{id}', [ReservationController::class,'reservationcancelled'])->name('reservations.reservationcancelled');
Route::get('reservations/report', [ReservationController::class,'report'])->name('reservations.report');
Route::get('reservations/filter', [ReservationController::class,'filterReservations'])->name('reservations.filterReservations');
Route::resource('reservations', ReservationController::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//==Cart================================================================
Route::get('cart/cancelSpecificreservation/{id}', [CartController::class,'cancelSpecificreservation'])->name('cart.cancelSpecificreservation');
Route::get('cart/cancelAllReservation', [CartController::class,'cancelAllReservation'])->name('cart.cancelAllReservation');
Route::POST('cart/add', [CartController::class,'addToCart'])->name('cart.addToCart');
Route::resource('cart', CartController::class);

