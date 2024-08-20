<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        
        // Redirect to the welcome page with the name data
        return redirect()->route('welcome')->with([
            'first_name' => $firstName,
            'last_name' => $lastName,
        ]);
    }

    public function showWelcomePage()
    {
        $firstName = session('first_name');
        $lastName = session('last_name');

        return view('welcome', compact('firstName', 'lastName'));
    }
}
