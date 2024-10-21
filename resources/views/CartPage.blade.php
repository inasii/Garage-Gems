<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GarageGems</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}">
    <script src="{{ asset('assets/js/Cart.js') }}" defer></script>

</head>

<body class="">

    <div class="container">
        <header>
        <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <nav class="navigation">
                <!-- <div class="iconCart">
                    <a><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                    <span>0</span>
                </div> -->
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="Profile.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav> 
        </header>
    
        <div class="wrapper">
            <div class="cart">
                <div class="top">
                    <h2>Shopping Cart</h2>
                    <h3 id="itemA">{{ count($cart) }} Items</h3>
                </div>
                <table cellspacing="0" class="table-head">
                    <tr>
                        <th width="250" class="head-img">Image</th>
                        <th width="100" class="head-name">Name</th>
                        <th width="140" class="head-price">Price</th>
                        <th width="90">Delete</th>
                    </tr>
                </table>

                <table id="root" cellspacing="0">
                    @foreach($cart as $id => $details)
                        <tr>
                            <td width="290">
                                <div class="img-box"><img class="img" src="{{ asset('storage/' . $details['photo']) }}" alt="{{ $details['name'] }}"></div>
                            </td>
                            <td width="260"><p style='font-size:20px;'>{{ $details['name'] }}</p></td>
                            <td width="170"><h2 style="font-size:20px; color:black;">Rp {{ number_format($details['price'], 0, ',', '.') }}</h2></td>
                            <td width="30"><i class='fa-solid fa-trash remove' data-id="{{ $id }}"></i></td>
                        </tr>
                    @endforeach
                </table>
            </div>
           
            <div class="summary">
                <div class="top">
                    <h2>Order Summary</h2>
                </div>
                <div class="detail">
                    <h1 id="itemB">{{ count($cart) }} items</h1>
                    <h1 id="totalA">Rp {{ number_format(array_sum(array_column($cart, 'price')), 0, ',', '.') }}</h1>
                </div>
                <div class="detail-bawah" style="margin-top: 20px; padding: 0 30px; height: 240px;">
                    <h2>Shipping</h2>
                    <input type="text" placeholder="Standard Delivery">
                    <h2>Promo Code</h2>
                    <!-- Use "GarageGemsMantap" only for the first 3 person -->
                    <input type="text" placeholder="Enter your code" id="promoCode">
                    <button class="applyBtn" id="promo" onclick="promo()">Apply</button>
                </div>
                <hr size="3px" color="black">
                <div class="orderTop">
                    <h2>Total :</h2>
                    <h1 id="totalB">Rp {{ number_format(array_sum(array_column($cart, 'price')), 0, ',', '.') }}</h1>
                </div>
                <div style="padding: 0 10px; margin-bottom: 200px;">
                    <a href="{{ route('checkout') }}">
                        <button class="checkout">Check out</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>