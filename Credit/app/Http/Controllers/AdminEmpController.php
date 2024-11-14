<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEmpController extends Controller
{
    public function emp()
    {
        // Return the view for the leave tardiness
        return view('AdminEmp'); // Make sure to create this view
    }
}