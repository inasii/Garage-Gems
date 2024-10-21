<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet">

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

    <div class="container mt-4">
        <h1>Category</h1>
        <h4>List Of Category</h4>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
                                + New Category
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Photo</th>
                                            <th>Slug</th>
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
                    { data: 'category', name: 'category' },
                    { data: 'photo', name: 'photo' },
                    { data: 'slug', name: 'slug' },
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
