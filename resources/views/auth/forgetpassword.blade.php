@extends('layouts.app')

@section('content')
    <div class="container">
        @include('_message')

        <div class="wrapper">
            <div class="title">
                <span> Forgot Password Page</span>
            </div>
            <form method="POST" action="{{url('forgot_post')}}">
                @csrf
                
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{old('email')}}" name="email" required placeholder="Enter your email">
                </div>
                
               
                <div class="signup-link"><a href="{{url('login')}}">Login</a></div>
                
                <div class="row button">
                    <input type="submit" value="Forget Password">
                </div>
                <div class="signup-link">Sign In?<a href="{{url('registration')}}">Registration</a></div>
                <div class="signup-link">Welcome to Our website!<a href="{{url('/')}}">Welcome to Our website!</a></div>

            </form>
          
        </div>
    </div>

@endsection