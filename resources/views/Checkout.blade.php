<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/checkoutPage.css') }}">
    <script src="{{ asset('assets/js/checkoutPage.js') }}" defer></script>
</head>
<body>
    <header>
        <h2 class="logo">GarageGems</h2>
        <nav class="navigation">
            <a href="Cart.html"><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a>
            <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
            <a href="Profile.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
        </nav>
    </header>
    <div class="container">
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="column">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input type="text" name="full_name" value="{{ $user->name }}">
                    </div>
                
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" name="address">
                    </div>

                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" name="city">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>State :</span>
                            <input type="text" name="state">
                        </div>
                        <div class="inputBox">
                            <span>ZIP code :</span>
                            <input type="number" name="zip_code" placeholder="123 456">
                        </div>
                    </div>
                </div>

                <div class="column">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <span>Cards Accepted :</span>
                        <img src="images/imgcards.png" alt="">
                    </div>
                
                    <div class="inputBox">
                        <span>Name on card :</span>
                        <input type="text" name="name_on_card">
                    </div>
        
                    <div class="inputBox">
                        <span>Credit Card Number :</span>
                        <input type="number" name="credit_card_number" placeholder="1111 2222 3333 4444">
                    </div>
        
                    <div class="inputBox">
                        <span>Exp. Month :</span>
                        <input type="text" name="exp_month" placeholder="August">
                    </div>
        
                    <div class="flex">
                        <div class="inputBox">
                            <span>Exp. Year :</span>
                            <input type="number" name="exp_year" placeholder="2025">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="number" name="cvv" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
