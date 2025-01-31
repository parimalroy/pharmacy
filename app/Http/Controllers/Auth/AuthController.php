<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth_home()
    {

        return view('Auth.auth-home');
    }

    public function auth_login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // dd($user);
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard.home');
        } else {
            return redirect()->back()->with('error', 'Crediental not Match');
        }
    }

    public function auth_logout()
    {
        Auth::logout();
        return redirect()->route('auth.home');
    }

    public function auth_forgot()
    {
        return view('Auth.auth-forgot');
    }
}