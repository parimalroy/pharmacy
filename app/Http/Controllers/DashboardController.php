<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard_home()
    {
        if (Auth::check()) {

            return view('Backend.dashboard');
        } else {
            return redirect()->route('auth.home');
        }
    }
}