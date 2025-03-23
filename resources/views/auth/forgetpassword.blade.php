<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  />
    <title>Forgot Password | MGKCODING</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span> Forgot Password Page</span>
            </div>
            <form method="POST" >
                @csrf
                
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                
               
                
                
                <div class="row button">
                    <input type="submit" value="Forget Password">
                </div>
                <div class="signup-link">Sign In?<a href="{{url('registration')}}">Registration</a></div>
                <div class="signup-link">Welcome to Our website!<a href="{{url('/')}}">Welcome to Our website!</a></div>

            </form>
            {{-- action="{{ route('register') }}">{{ route('login') }} --}}
        </div>
    </div>

</body>
</html>