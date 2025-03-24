<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        // Registration logic
        $data['meta_title'] = 'Registration Page'; 
        return view('auth.registration', $data);
    }
    public function login()
    {
        // Login logic
        $data['meta_title'] = 'Login Page'; 
        return view('auth.login', $data);
    }
    public function forgetpassword()
    {
        // Forget Password logic
        $data['meta_title'] = 'Forget Password Page';
        return view('auth.forgetpassword', $data);
    }
}
