<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Register.css') }}">
    <script src="cart.js"></script>
    <script src="{{ asset('assets/js/validation.js') }}" defer></script>
</head>
<body>
    <header>
        <h2 class="logo">GarageGems</h2>
        <nav class="navigation">
            <a href="Cart.html" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
            <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
            <a href="Profile.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box">
            <h2>Register</h2>

            <form action="{{ url('/make/account') }}" method="POST">
                @csrf
                <div class="two-forms">
                    <div class="firstName">
                        <div class="input-box">
                            <input type="text" required name="first_name">
                            <label>First Name</label>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="lastName">
                        <div class="input-box">
                            <input type="text" required name="last_name">
                            <i class="bx bx-user"></i>
                            <label>Last Name</label>
                        </div>
                    </div>

                </div>

                <div class="input-box">
                    <input type="email" required name="email">
                    <label>Email</label>
                    <i class="bx bx-envelope"></i>
                </div>

                <div class="input-box" placeholder="Username or Email">
                    <input type="tel" pattern="^\d{9,12}$" placeholder="10-12 numbers"required name="phone_num">
                    <label>Phone Number</label>
                    <i class="bx bx-phone"></i>
                </div>
                
                <div class="input-box">
                    <input type="password" required name="password" id="password">
                    <label>Password</label>
                    <i class="bx bx-lock"></i>
                </div>
                <div class="input-box">
                    <input type="password" required name="password_confirmation" id="password_confirmation" onkeyup='check();'>
                    <label>Confirm Password</label>
                    <i class="bx bx-lock"></i>
                    <span id="message"></span>
                </div>

            
                <label>
                
                </label>

                <div class=" ">
                    
                </div>
                <!-- <a href="Login.Html"> -->
                    <button type="submit" class="btn" id="submitButton" disabled>Sign Up</button>
                <!-- </a> -->
                
                <div class="login-register">
                    <p>Already have an account? <a href="{{ route('login') }}" class="register-link">Login</a></p>
                </div>
                
                <script>
                    
                </script>
            </form>
        </div> 
    </div>
</body>
</html>