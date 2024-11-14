<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function tardiness()
    {
        // Return the view for the leave tardiness
        return view('Leave'); // Make sure to create this view
    }
}