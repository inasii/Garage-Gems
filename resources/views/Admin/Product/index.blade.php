<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/AdminDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/AdminProduct.css') }}">
</head>

<body>

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
    </section>

    <section id="Header">
        <section id="sidebar">
            <a href="#" class="brand">
                <i class="bx fa-solid fa-gem"></i>
                <span class="text">AdminGems</span>
            </a>
            <ul class="side-menu top">
                <li class="active">
                    <a href="{{ route('AdminDashboard') }}">
                        <i class="bx fa-solid fa-table-columns"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.index') }}" class="{{ (request()->is('Admin/Product*')) ? 'active' : ''}}">
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
    

    <div class="container mt-4">
        <h1>Product</h1>
        <h4>List Of Product</h4>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
                                Add New Product
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Photo</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- DataTables will populate data here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

        <!-- DataTables Script -->
    <script>
        $(document).ready(function() {
            var datatable = $('#crudTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: '{!! url()->current() !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'photo', name: 'photo' },
                    { data: 'product', name: 'product' },
                    { data: 'category.category', name: 'category.category' },
                    { data: 'price', name: 'price' },
                    { data: 'description', name: 'description' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '20%'
                    }
                ]
            });
        });
    </script>
    
    <!-- Additional Scripts -->
    @stack('addon-script')

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
