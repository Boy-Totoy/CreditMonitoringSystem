<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Check if the username is correct
        if ($username !== 'admin') {
            return back()->withErrors(['username' => 'Sorry! Username you entered cannot be found.']);
        }
    
        // Check if the password is correct for the given username
        if ($password !== 'admin') {
            return back()->withErrors(['password' => 'The password you entered is not correct for this username.']);
        }
    
        // Add a delay before redirecting to the dashboard
        sleep(5); // Delay for 2 seconds
    
        // Redirect to the dashboard if credentials are correct
        return redirect()->route('admin.dashboard');
    }
}
