<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/AdminDashboard.css') }}">
</head>
<body>
    <section id="content">
        {{-- <nav>
            <i class="bx fa-solid fa-bars"></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class="bx fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <a href="#" class="notification">
                <i class="bx fa-solid fa-bell"></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="image/people.jpeg">
            </a>
        </nav> --}}
    </section>
    
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="bx fa-solid fa-gem"></i>
            <span class="text">AdminGems</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="">
                    <i class="bx fa-solid fa-table-columns"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action 
                        {{ (request()->is('Admin/Product*')) ? 'active' : ''}}">
                    <i class="bx fa-solid fa-bag-shopping"></i>
                    <span class="text">My Store</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx fa-solid fa-chart-column"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx fa-solid fa-message"></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx fa-solid fa-user-group"></i>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="">
                    <i class="bx fa-solid fa-gear"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="" class="logout">
                    <i class="bx fa-solid fa-right-from-bracket"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    {{-- <section id="Header">
        <header>
            <a href="{{ route('AdminDashboard') }}"><h2 class="logo">GarageGems Admin</h2></a>
            <nav class="navigation">
                <a href="">Users</a>
                <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action 
                        {{ (request()->is('Admin/category*')) ? 'active' : ''}}">Category</a>
                <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action 
                        {{ (request()->is('Admin/Product*')) ? 'active' : ''}}">Products</a>
                <a href="">Orders</a>
                <a href="">Settings</a>
                <a href=""><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
                <a href=""><i class="fa-solid fa-sign-out-alt" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
    </section>  --}}

    <section id="content">
        <nav>
            <i class="bx fa-solid fa-bars"></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class="bx fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <a href="#" class="notification">
                <i class="bx fa-solid fa-bell"></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="image/people.jpeg">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class="bx fa-solid fa-chevron-right"></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="btn-download">
                    <i class="bx fa-solid fa-cloud-arrow-down"></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class=" bx fa-solid fa-calendar-check"></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class="bx fa-solid fa-user-group"></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class="bx fa-solid fa-circle-dollar-to-slot"></i>
                    <span class="text">
                        <h3>2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class="bx fa-solid fa-magnifying-glass"></i>
                        <i class="bx fa-solid fa-filter"></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="image/people.jpeg" width="36px" height="36px">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Complete</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="image/people.jpeg" width="36px" height="36px">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Complete</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="image/people.jpeg" width="36px" height="36px">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="image/people.jpeg" width="36px" height="36px">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Process</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="image/people.jpeg" width="36px" height="36px">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class="bx fa-solid fa-plus"></i>
                        <i class="bx fa-solid fa-filter"></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Todo list</p>
                            <i class="bx fa-solid fa-ellipsis-vertical"></i>
                        </li>
                        <li class="completed">
                            <p>Todo list</p>
                            <i class="bx fa-solid fa-ellipsis-vertical"></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo list</p>
                            <i class="bx fa-solid fa-ellipsis-vertical"></i>
                        </li>
                        <li class="completed">
                            <p>Todo list</p>
                            <i class="bx fa-solid fa-ellipsis-vertical"></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo list</p>
                            <i class="bx fa-solid fa-ellipsis-vertical"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </section>
    <script src="index.js"></script>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <a href="#">GarageGems Admin</a>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <strong>Management</strong>
                <ul>
                    <li><a href="">Users</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Orders</a></li>
                    <li><a href="">Settings</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <strong>Support</strong>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer> 
</body>
</html>
