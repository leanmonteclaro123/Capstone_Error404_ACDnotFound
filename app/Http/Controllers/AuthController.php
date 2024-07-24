<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('loginPage');
    }

    public function showRegisterForm()
    {
        return view('loginPage');
    }
    
    public function register(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:loginmodels',
        'email' => 'required|string|email|max:255|unique:loginmodels',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->route('register')->withErrors($validator)->withInput()->with('register_error', 'Registration failed.');
    }

    $loginModel = loginModel::create([
        'Role' => $request->Role,
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('register_success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Role-based redirection
            switch ($user->Role) {
                case 'Admin':
                    return redirect()->intended('/admin')->with('login_success', 'Login successful.');
                case 'User':
                    return redirect()->intended('/register')->with('login_success', 'Login successful.');
                // Add more roles and corresponding redirects as needed
                default:
                    Auth::logout();
                    return redirect()->route('showLoginForm')->with('login_error', 'Login failed. Invalid role.');
            }
        }

        return redirect()->back()->withErrors(['username' => 'The provided credentials do not match our records.'])->withInput()->with('login_error', 'Login failed.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('logout_success', 'You have been logged out.');
    }
}


