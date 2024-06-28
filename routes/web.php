<?php
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login',function(){
//     return view('loginPage');
// });

Route::get('/admin',function(){
    return view('admin');
});

Route::get('/login',[RegisterController::class,'register']);

Route::post('/store',[RegisterController::class,'store']);
