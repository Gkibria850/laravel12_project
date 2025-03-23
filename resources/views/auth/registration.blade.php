<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  />
    <title>Registration | MGKCODING</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span> Registration Page</span>
            </div>
            <form method="POST" >
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="username" required placeholder="Enter your Username">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="password" required placeholder="Enter your password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="confirmpassword" required placeholder="Enter your Confirm password">
                </div>
                
                <div class="row">
                    <select class="selectbox" required>
                        <option value="">Select your role</option>
                        <option value="2">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
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

</body>
</html>