<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/AdminProduct.css') }}">
</head>
<body>
    <section id="Header">
        <header>
            <h2 class="logo">GarageGems</h2>
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

    <div class="container">
        <div class="admin-product-form-container centered">
            <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3>Update The Product</h3>
                <input type="text" placeholder="enter product name" name="product" class="box" value="{{ $item->product }}" required>
                <select name="category_id" class="box">
                    <option value="{{ $item->category_id }}" selected>{{ $item->category->category }}</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="enter product price" name="price" class="box"  value="{{ $item->price }}" required>
                <input type="text" placeholder="enter product description" name="description" class="box" value="{{ $item->description }}" required>
                <input type="file" placeholder="image/png, image/jpg, image/jpeg," name="photo" class="box" required>
                <input type="submit" class="btn" name="update_product" value="Update product">
                <a href="{{ route('product.index') }}" class="btn">Go Back</a>
            </form>
        </div>
    </div>

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
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Furniture</a></li>
                <li><a href="#">Plant</a></li>
                <li><a href="#">Recycle Items</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <strong>Contact</strong>
            <ul>
                <li><a href="#">Phone: +62 081264095130</a></li>
                <li><a href="#">Email: plsUdahbang@gmail.com</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>