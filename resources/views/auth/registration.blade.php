@extends('layouts.app')

@section('content')
    <div class="container">
        <span style="color: yellow;">{{$errors->first('email')}}<br/></span>
        <span style="color: red;">{{$errors->first('password')}}<br/></span>
        <span style="color: red;">{{$errors->first('confirm_password')}}<br/></span>
       
        @include('_message')

        <div class="wrapper">
            <div class="title">
                <span> Registration Page</span>
            </div>
            <form method="POST" action="{{ url('registration_post') }}">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text"  name="name" value="{{old('name')}}" required placeholder="Enter your Username">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" value="{{old('email')}}" required placeholder="Enter your email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="password" required placeholder="Enter your password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="confirm_password" required placeholder="Enter your Confirm password">
                </div>
                
                <div class="row">
                    <select class="selectbox" required name="is_role">
                        <option value="">Select your role</option>
                        <option {{ old('is_role') == '2' ? 'selected' : '' }} value="2">Super Admin</option>
                        <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin</option>
                        <option {{ old('is_role') == '0' ? 'selected' : '' }} value="0">User</option>
                    </select>
                </div>
                <div class="pass">
                    <a href="{{url('forgetpassword')}}">Forget Password</a>
                </div>
                
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>
                <div class="signup-link">Sign In?<a href="{{url('login')}}">Login</a></div>
                <div class="signup-link">Welcome to Our website!<a href="{{url('/')}}">Welcome to Our website!</a></div>

            </form>
            {{-- action="{{ route('register') }}">{{ route('login') }} --}}
        </div>
    </div>
@endsection