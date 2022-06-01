<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;

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

