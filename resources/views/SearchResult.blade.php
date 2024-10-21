<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Search Results for "{{ $query }}" - GarageGems</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Search.css') }}">

</head>
<body>
    <section id="Header">
        <header>
            <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <div class="search-bar">
                <i class="fa fa-search"></i>
                <input type="search" id="searchInput" placeholder="Find at GarageGems">
                <button onclick="searchProducts()">Search</button>
            </div>

            <script>
                function searchProducts() {
                    let query = document.getElementById('searchInput').value.trim();
                    
                    if (query !== '') {
                        window.location.href = `/search-results?query=${query}`;
                    }
                }
            </script>

            <nav class="navigation">
                <a href="{{ route('showCart') }}"><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="{{ route('message') }}"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="{{ route('profile') }}"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
    </section>

    <section id="popular-product">
        <div class="product-heading">
            <h1>Search Results for "{{ $query }}"</h1>
        </div>

        <div class="product-container">
            @foreach ($products as $product)
                <div class="product-box">
                    <a href="{{ route('descpro', ['id' => $product->id]) }}">
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product }}">
                    </a>
                    <strong>{{ $product->product }}</strong>
                    <span class="quantity">{{ $product->quantity }} Pcs</span>
                    <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    <button class="cart-btn" onclick="addToCart({{ $product->id }})">
                        <i class="fas fa-shopping-bag"></i> Add To Cart
                    </button>
                    <a href="#" class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>
