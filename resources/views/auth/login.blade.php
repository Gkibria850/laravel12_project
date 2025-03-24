@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span> Login Page</span>
            </div>
            <form method="POST" >
                @csrf
                
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="password" required placeholder="Enter your password">
                </div>
               
                
                
                <div class="pass">
                    <a href="{{url('forgetpassword')}}">Forget Password</a>
                </div>
                
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Sign In?<a href="{{url('registration')}}">Registration</a></div>
                <div class="signup-link">Welcome to Our website!<a href="{{url('/')}}">Welcome to Our website!</a></div>

            </form>
            {{-- action="{{ route('register') }}">{{ route('login') }} --}}
        </div>
    </div>

@endsection