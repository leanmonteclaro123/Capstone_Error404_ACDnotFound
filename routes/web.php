<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/showregister', [AuthController::class, 'showRegisterForm'])->name('showregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/admin', function(){
    return view ('admin');
});
