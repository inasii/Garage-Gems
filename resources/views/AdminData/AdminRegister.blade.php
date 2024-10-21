<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/becomeASeller.css') }}">
</head>
<body>
    <header>
        <h2 class="logo">GarageGems</h2>
        <nav class="navigation">
            <a href="Cart.html" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
            <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
            <a href="ProfileTest.Html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
        </nav>
    </header>

    <div class="wrapper">

        <div class="gambarHappy">
            <img src="{{ asset('assets/images/happy.jpg') }}" width="255px" top="20px"right="20px">
        </div>

        <div class="kotakSeller">
            <h2>Join Now!</h2>
        </div>

        <div class="form-box">
            <h3>Store Information</h3>
            <form action="{{ route('seller.register') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="store_name" required>
                    <label>Store Name</label>
                </div>
            
                <div class="input-box-email">
                    <input type="text" name="store_description" required>
                    <label>Store Description</label>
                </div>
            
                <div class="input-box">
                    <input type="tel" name="store_phone" pattern="^\d{9,12}$" required>
                    <label>Store Phone Number</label>
                </div>
            
                <div class="input-box">
                    <input type="text" name="address" required>
                    <label>Address</label>
                </div>
            
                <div class="btn">
                    <button type="submit" class="btn">Submit</button> 
                </div>
            </form>
        </div> 
    </div>
</body>
</html>