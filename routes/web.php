<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleRegistrationController;

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('loginPage');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/admin', function () {
            return view('admin');
        });

        Route::get('/register', function () {
            return view('register');
        });

        Route::get('/admins', [VehicleRegistrationController::class, 'index']);
    });

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/vehicle-registration', [VehicleRegistrationController::class, 'store'])->name('vehicle.registration.store');
});

