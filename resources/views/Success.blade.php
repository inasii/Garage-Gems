<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/successful.css') }}">
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

    <body>
        <div class="pageSuccess">
            <div class="sectionSuccess" data-aos="zoom-in">
                <div class="container">
                    <div class="row align-items-center row-login justify-content-center"><!--ini klo pengen semuanya ada di tengah layar, bisa pake align-items-center-->
                        <div class="col-lg-6 text-center">
                            <img src="/images/success.jpg" alt="" class="mb-4">
                            <h2>
                                Transaction Processed!
                            </h2>
                            <p>
                                Harap tunggu konfirmasi melalui email dari kami, kami akan menginformasikan nomor resi sesegera mungkin!
                            </p>
                            <div>
                                <a href="{{ route('home') }}">
                                    <button class="goToHome">Go to Home Page</button>
                                </a>                                
                                <a href="{{ route('free') }}">
                                    <button class="goToShopping">Go to Shopping</button>
                                </a>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</body>
</html>