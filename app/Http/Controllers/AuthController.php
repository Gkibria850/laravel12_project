<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        // Registration logic
        return view('auth.registration');
    }
    public function login()
    {
        // Login logic
        return view('auth.login');
    }
    public function forgetpassword()
    {
        // Forget Password logic
        return view('auth.forgetpassword');
    }
}
