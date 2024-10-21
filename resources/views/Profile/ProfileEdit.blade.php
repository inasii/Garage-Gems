<!DOCTYPE html>
<html lang="en">
<head>
    <title>GarageGems</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/Userprofile.css') }}">
    <script src="{{ asset('assets/js/Userprofile.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Profile.css') }}">
</head>
<body>
    <form action="{{ url('/profile/update') }}" method="POST">
        @csrf
        <header>
            <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <div class="search-bar">
                <i class="fa fa-search"></i>
                <input type="search" id="searchInput" placeholder="Find at GarageGems">
                <button onclick="searchProducts()">Search</button>
            </div>

            <nav class="navigation">
                <a href="{{ route('showCart') }}" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="{{ route('message') }}"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="{{ route('profile') }}"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4" style="font-size: 30px;">User Profile</h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Edit Address</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">My Order</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Order History</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">My Product</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-seller">Become a Seller</a>
                        </div>
                    </div>

                    <!-- GENERAL -->
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control mb-1" name="first_name" value="{{ old('first_name', $userData->first_name) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $userData->last_name) }}" required>
                                    </div>
                                </div>
                                
                                <div class="card-body pb-2">
                                    <div class="kontak">
                                        <h6 class="mb-4">Contacts</h6>
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone_num" value="{{ old('phone_num', $userData->phone_num)  }}" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" name="email" value="{{ old('email', $userData->email) }}" required>
                                    </div>
                                </div>
                            </div>

                            <!-- CHANGE PASSWORD -->
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control" name="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" class="form-control" name="new_password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <!-- EDIT ADDRESS -->
                            <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Province</label>
                                        <input type="text" class="form-control" name="provinces" value="{{ old('provinces', optional($Userprofile)->provinces) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ old('city', optional($Userprofile)->city) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" class="form-control" name="zip_code" value="{{ old('zip_code', optional($Userprofile)->zip_code) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Address (Street, house/apartment number, etc.)</label>
                                        <input type="text" class="form-control" name="address_one" value="{{ old('address_one', optional($Userprofile)->address_one) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- MY ORDER -->
                            <div class="tab-pane fade" id="account-social-links">
                                <div class="card-body pb-2">
                                    <section class="my-order">
                                        <h2>My Order</h2>
                                        <div id="myOrderList"></div>
                                    </section>
                                </div>
                            </div>

                            <!-- ORDER HISTORY -->
                            <div class="tab-pane fade" id="account-connections">
                                <hr class="border-light m-0">
                                <section class="order-history">
                                    <h2>Order History</h2>
                                    <div id="orderHistoryList"></div>
                                </section>
                            </div>

                            <!-- MY PRODUCT -->
                            <div class="tab-pane fade" id="account-notifications">
                                <div class="card-body pb-2">
                                    <section class="my-product">
                                        <h2>My Product</h2>
                                        <div id="myProductList"></div>
                                    </section>
                                </div>
                            </div>

                            <!-- BECOME A SELLER -->
                            <div class="tab-pane fade" id="account-seller">
                                <hr class="border-light m-0">
                                <section class="order-history">
                                    <div class="gambarSeller">
                                        <img src="/images/sad.jpg" width="300px" top="20px" right="20px">
                                    </div>
                                    <h5>You are not a seller yet, want to become a seller?</h5>
                                    <div style="padding: 0 10px; margin-bottom: 200px; border-color: aliceblue;">
                                        <a href="{{ route('seller.register') }}">
                                            <button class="beASeller">Yes</button>
                                        </a>
                                    </div>
                                    <div id="becomeASeller"></div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
