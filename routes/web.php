<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [HomeController::class, 'view']);
Route::post('/appointment', [AppointmentController::class, 'getAppointment']);
Route::get('/book/{id}', [BookingController::class, 'bookAppointment']);
Route::get('/login', [LoginController::class, 'getLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'getRegister']);
Route::post('/register', [LoginController::class, 'register']);
Route::get('/profile', [LoginController::class, 'getProfile']);
Route::get('//my-appointment', [HomeController::class, 'getMyAppointment']);

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'home']);
    Route::get('/admin/manage-schedule', [AdminController::class, 'manageSchedule']);
    Route::post('/admin/manage-schedule', [AdminController::class, 'getAppointment']);
    Route::get('/admin/history', [AdminController::class, 'history']);
    Route::get('/admin/reservation/{id}', [AdminController::class, 'showReservations']);
    Route::get('/admin/reservation/{id}/delete', [AdminController::class, 'deleteReservations']);

    Route::get('/admin/addslot', [AdminController::class, 'addslot']);
    Route::post('/admin/addslot', [AdminController::class, 'postslot']);
    Route::get('/admin/reservation/{reservationId}/confirm/{userId}', [AdminController::class, 'confirmBooking']);

});


