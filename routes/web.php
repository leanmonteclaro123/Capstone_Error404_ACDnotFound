<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleRegistrationController;


Route::get('/', function () {
    return view('loginPage');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->middleware('auth');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/vehicle-registration', [VehicleRegistrationController::class, 'store'])->name('vehicle.registration.store');

