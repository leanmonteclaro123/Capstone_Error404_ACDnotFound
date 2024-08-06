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
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Type' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middle' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:loginmodels',
            'Role' => 'required|string|max:255',
            'id_no' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:loginmodels',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('showRegisterForm')->withErrors($validator)->withInput()->with('register_error', 'Registration failed.');
        }

        $loginModel = loginModel::create([
            'Type' => $request->Type,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'middle' => $request->middle,
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'username' => $request->username,
            'Role' => $request->Role,
            'id_no' => $request->id_no,
            'campus' => $request->campus,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('register_success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');
    \Log::info('Attempting login', ['credentials' => $credentials]);

    if (Auth::attempt($credentials)) {
        \Log::info('Before session regenerate', ['session' => session()->all()]);
        $request->session()->regenerate();
        \Log::info('After session regenerate', ['session' => session()->all()]);

        $user = Auth::user();
        \Log::info('User authenticated', ['user' => $user]);

        // Store the authenticated user in session
        session(['authenticated_user' => $user]);

        // Role-based redirection
        switch ($user->Type) {
            case 'Admin':
                return redirect()->intended('/admin')->with('login_success', 'Login successful.');
            case 'User':
                return redirect()->intended('/register')->with('login_success', 'Login successful.');
            default:
                Auth::logout();
                return redirect()->route('login')->with('login_error', 'Login failed. Invalid role.');
        }
    }

    \Log::error('Authentication failed', ['credentials' => $credentials]);
    return redirect()->route('login')->withErrors(['username' => 'The provided credentials do not match our records.'])->withInput()->with('login_error', 'Login failed.');
}

    
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('logout_success', 'You have been logged out.');
        }

}
