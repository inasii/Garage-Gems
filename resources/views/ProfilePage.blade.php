<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Profile.css') }}">
    <script src="{{ asset('assets/js/Profile.js') }}" defer></script>

</head>
<body>
    <div class="container">
        <header>
            <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <nav class="navigation">
                <div class="iconCart">
                    <a><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                    <span>0</span>
                </div>
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <div class="iconUser" id="iconUser">
                    <a href="#"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
                </div>
                
                <div class="subMenuWrap" id="subMenu">
                    <div class="subMenu">
                        <div class="userInfo">
                            <a href="{{ route('profile') }}">
                                <img src="{{ asset('assets/images/profile/mrbean.jpg') }}" width="55" height="55">
                                <h2>James</h2>
                            </a> 
                        </div>
                        <hr>
                        <a href="#" class="subMenuLink">
                            <img src="{{ asset('assets/images/profile/userPng.jpg') }}"width="40" height="40">
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="subMenuLink">
                            <img src="{{ asset('assets/images/profile/home.jpg') }}"width="40" height="40">
                            <p>Edit Address</p>
                            <span>></span>
                        </a>
                        <a href="#" class="subMenuLink">
                            <img src="{{ asset('assets/images/profile/help.jpg') }}"width="40" height="40">
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="#" class="subMenuLink">
                            <img src="{{ asset('assets/images/profile/lock.png') }}"width="40" height="40">
                            <p>Edit Password</p>
                            <span>></span>
                        </a>
                        <a href="#" class="subMenuLink">
                            <img src="{{ asset('assets/images/profile/logoutPng.jpg') }}"width="100" height="40">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <script src="Cart.js"></script>
    <script>
        document.getElementById('iconUser').addEventListener('click', function() {
            var subMenu = document.getElementById('subMenu');
            subMenu.classList.toggle('open-menu');
        });
    </script>
</body>
</html>
