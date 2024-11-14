<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        return view('UserLogin'); // Make sure you have a dashboard.blade.php view
    }
}

