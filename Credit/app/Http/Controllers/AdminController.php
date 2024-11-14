<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Return the view for the admin dashboard
        return view('AdminDashboard');
    }

  
}
