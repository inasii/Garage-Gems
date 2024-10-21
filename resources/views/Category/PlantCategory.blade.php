<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Fashion.css') }}">

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
                <a href="Cart.html" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="Contact.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
    </section> 

    <section id="head-page">
                   <img src="{{ asset('assets/images/Plant1.png') }}" alt=""> 
    </section>

    
<section id="popular-product">
<div class="product-container">
        @foreach ($products as $product)
            <div class="product-box">
                <a href="{{ route('descpro', ['id' => $product->id]) }}">
                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product }}">
                </a>
                <strong>{{ $product->product }}</strong>
                <span class="quantity">{{ $product->quantity }} Pcs</span>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add To Cart
                </a>
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        @endforeach
    </div>
</section>
    
<section id="category">
    <div class="category-heading">
     <h2>Category</h2>
     <span>All</span>
    </div>

    <div class="category-container">
     <a href="{{ route('fashion') }}" class="category-box">
         <img src="{{ asset('assets/images/fashion.jpg') }}" alt="fashion" >
         <span>Fashion</span>
     </a>


     <a href="{{ route('furniture') }}" class="category-box">
         <img src="{{ asset('assets/images/furnitur.png') }}" alt="fashion">
         <span >Furniture</span>
     </a>

     <a href="{{ route('plant') }}" class="category-box">
         <img src="{{ asset('assets/images/plant.png') }}" alt="fashion">
         <span>Plant</span>
     </a>

     <a href="{{ route('recycle') }}" class="category-box">
         <img src="{{ asset('assets/images/Recycle.png') }}" alt="fashion" >
         <span>Recycle Items</span>
     </a>

     <a href="{{ route('free') }}" class="category-box">
         <img src="{{ asset('assets/images/Free.png') }}" alt="fashion" >
         <span>Free</span>
     </a>
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