<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function login() {
        if(View::exists('loginPage')){
            return view('loginPage');
        }else{
            return abort(404);
        }
    }
    public function register(){
        return view ('loginPage');
    }

    public function store (Request $request){
        $validated = $request->validated([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
