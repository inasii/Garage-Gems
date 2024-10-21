<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">
</head>
<body>
    <section id="Header">
    <header>
        <h2 class="logo">GarageGems</h2>
        
    </header>
    </section> 

    <section id="loginp">
    <div class="wrapper">
        <div class="form-box">
            <h2>Login</h2>
            <form action="{{ route('submitlogin') }}" method="POST"">
            @csrf
                <div class="input-box">
                    <input type="email" required name="email" autofocus>
                    <label>Email</label>
                </div>

                <!-- @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif -->

                <div class="input-box">
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <label><input type="checkbox">Remember me</label>
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Not registered yet? <a href="{{ route('register') }}" class="register-link">Create an Account</a></p>
                </div>
            </form>
        </div> 
    </div>
    </section>
</body>
</html>