<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');
    }

    public function submitLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found');
        }
    

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Invalid credentials');
        }
        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'User logged in successfully.');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'user logout successfully');
    }
}
