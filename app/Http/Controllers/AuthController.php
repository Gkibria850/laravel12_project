<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Str;

class AuthController extends Controller
{
    public function registration()
    {
        // Registration logic
        $data['meta_title'] = 'Registration Page'; 
        return view('auth.registration', $data);
    }
    public function registration_post(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','min:8'],
            'confirm_password' => ['required_with:password','min:8','same:password'],
            'is_role' => ['required'],
        ]);

        // Create a new user and save it to the database
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password =  Hash::make($request->password);
        $user->is_role =  trim($request->is_role);
        //$user->is_role =  'user';  // Set user role as default
        $user->remember_token = Str::random(50);  // Generate unique token for remember me functionality
        $user->save();
        return redirect('login')->with('success', 'Registration successful. Please login.');
        // $user = new User;
        // $user->name = trim($request->name);
        // $user->email = trim($request->email);
        // $user->password =  Hash::make($request->password);
        // $user->is_role =  trim($request->is_role);
        // $user->remember_token = Str::random(50);  // Generate unique token for remember me functionality
        // $user->save();
        // return redirect('login')->with('success', 'Registration successful. Please login.');
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
