<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Message.css') }}">

</head>
<body>
    <section id="Header">
        <header>
            <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <div class="search-bar">
                <i class="fa fa-search" ></i>
                <input type="search" placeholder="Find at GarageGems" >
            </div>
            <nav class="navigation">
                <a href="{{ route('cart') }}" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="{{ route('profile') }}"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
    </section> 
   
   <section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p> If you have any questions, comments, or suggestions, you are welcome to leave us a message. We value your input and will respond to your inquiry as soon as possible.</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-map-pin"></i></div>
                <div class="text">
                    <h3>Addres</h3>
                    <p>Jl. Raya Kb. Jeruk Kemanggisan, Kota Jakarta Barat</p> 
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <h3>Phones</h3>
                    <p>+62 1234567890</p> 
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>GarageGems@gmail.com</p> 
                </div>
            </div>
        </div>
    <div class="contactForm">
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <h2>Send Message</h2>
            <div class="inputBox">
                <input type="text" name="full_name" required="required">
                <span>Full name</span>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Email</span>
            </div>
            <div class="inputBox">
                <textarea name="message" required="required"></textarea>
                <span>Type your message.....</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Send">
            </div>
        </form>
    </div>
    </div>
   </section>
   <footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="#">GarageGems</a>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-links">
            <strong>Product</strong>
            <ul>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Packages</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <strong>Category</strong>
            <ul>
                <li><a href="{{ route('fashion') }}">Fashion</a></li>
                <li><a href="{{ route('furniture') }}">Furniture</a></li>
                <li><a href="{{ route('plant') }}">Plant</a></li>
                <li><a href="{{ route('recycle') }}">Recycle Items</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <strong>Contact</strong>
            <ul>                               
                <li><a href="#">Phone: +62 081234567890</a></li>
                <li><a href="#">Email: GarageGemsOfficial@gmail.com</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>