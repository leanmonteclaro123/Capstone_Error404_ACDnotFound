<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Route::get('/showregister', [AuthController::class, 'showRegisterForm'])->name('showregister');
// Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/admin', function () {return view('admin');})->middleware('auth');
Route::get('/register', function () {return view('register');});