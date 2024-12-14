<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    
    public function postLogin(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'Admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
            }
            return redirect()->route('users.dashboard')->with('success', 'Login berhasil');
        }
        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function postRegister(Request $request)
    {
        try {
            $validation = $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|max:50',
            ]);

            $user = new User;
            $user->name = $validation['name'];
            $user->email = $validation['email'];
            $user->password = bcrypt($validation['password']);
            $user->save();

            return redirect()->route('login')->with('success', 'Your account successfully created. Please login.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
