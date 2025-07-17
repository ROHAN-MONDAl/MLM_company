<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basanti Shopee</title>
    <!-- Favicon -->
    <link rel="icon" href="../../images/favicon.svg" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Mobile Menu Toggle -->
    <button class="mobile-toggle" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <div class="overlay" onclick="toggleSidebar()"></div>

    <div class="main-wrapper d-flex justify-content-center align-items-center">
        <!-- Sidebar -->
        <div class="sidebar-nav">
            <!-- User Profile Section -->
            <div class="user-profile-section d-flex align-items-center">
                <div class="user-avatar me-3">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="user-info">
                    <div class="username fw-bold text-truncate">John Doe</div>
                    <div class="user-rank text-truncate">
                        <i class="fas fa-star text-warning me-1"></i>
                        <span>Premium Member</span>
                    </div>
                </div>
            </div>
            <hr class="hr-line" />

            <!-- Scrollable menu -->
            <div class="sidebar-menu">
                <ul class="nav flex-column w-100">
                    <!-- Dashboard -->
                    <li>
                        <a href="#" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Overview</span>
                        </a>
                    </li>

                    <!-- Dropdown: Membership -->
                    <li>
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#MembershipMenu"
                            role="button" aria-expanded="false" aria-controls="MembershipMenu">
                            <i class="fas fa-users"></i>
                            <span class="mx-2">Members</span>
                            <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                        </a>
                        <div class="collapse dropdown-animated" id="MembershipMenu">
                            <ul class="nav flex-column">
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-user-plus"></i>
                                        <span class="mx-2">Add Member</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="mx-2">Member Groups</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Stockist -->
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-store-alt"></i>
                            <span>Distributors</span>
                        </a>
                    </li>

                    <!-- Inventory -->
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-boxes"></i>
                            <span>Inventory</span>
                        </a>
                    </li>

                    <!-- Account Status -->
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Accounts</span>
                        </a>
                    </li>

                    <!-- Dropdown: Settings -->
                    <li>
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#settingsMenu"
                            role="button" aria-expanded="false" aria-controls="settingsMenu">
                            <i class="fas fa-cogs"></i>
                            <span class="mx-2">Settings</span>
                            <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                        </a>
                        <div class="collapse dropdown-animated" id="settingsMenu">
                            <ul class="nav flex-column">
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-user-cog"></i>
                                        <span class="mx-2">Profile Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-shield-alt"></i>
                                        <span class="mx-2">Security</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <!-- Log Out -->
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Main Content -->
        <div class="dashboard-body">
            <!-- Header inside body -->
            <div class="navbar-header d-flex align-items-center justify-content-between px-3 py-2">
                <span class="hamburger d-lg-none" onclick="toggleSidebar()">
                    <i class="fa-solid fa-bars-staggered"></i>
                </span>
                <span class="hamburger d-none d-lg-block" onclick="toggleCollapse()">
                    <i class="fa-solid fa-bars-staggered"></i>
                </span>

                <div class="header-center d-flex justify-content-center mx-auto align-items-center gap-2">
                    <img src="your-logo.png" alt="Logo" class="header-logo" width="40" height="40">
                    <span class="fw-bold fs-5">Basanti Shopee</span>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <!-- User Rank Section -->
                            <div class="user-rank rounded-top p-3 mb-3 text-center">
                                <h5 class="mb-0 fw-bold">Gold Member</h5>
                                <small>You save 15% on all items</small>
                            </div>

                            <!-- Cart Container -->
                            <div class="cart-container p-3">
                                <h4 class="mb-3">Your Cart</h4>

                                <!-- Cart Item 1 -->
                                <div class="row cart-item align-items-center mb-3 p-2 border rounded"
                                    data-id="101" data-price="599" data-discount="15">
                                    <div class="col-3 col-md-2">
                                        <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div class="col-5 col-md-6 product-details ps-3">
                                        <div class="fw-bold">Wireless Headphones</div>
                                        <div class="text-muted small">Bluetooth, Noise Cancelling</div>
                                    </div>
                                    <div class="col-4 col-md-4 text-end">
                                        <div class="d-flex align-items-center justify-content-end mb-1">
                                            <button class="quantity-btn btn-minus">-</button>
                                            <span class="mx-2 qty">1</span>
                                            <button class="quantity-btn btn-plus">+</button>
                                        </div>
                                        <div class="fw-bold">₹<span class="subtotal">509.15</span></div>
                                    </div>
                                </div>

                                <!-- Cart Item 2 -->
                                <div class="row cart-item align-items-center mb-3 p-2 border rounded"
                                    data-id="102" data-price="1299" data-discount="15">
                                    <div class="col-3 col-md-2">
                                        <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div class="col-5 col-md-6 product-details ps-3">
                                        <div class="fw-bold">Smart Watch</div>
                                        <div class="text-muted small">Fitness Tracker with GPS</div>
                                    </div>
                                    <div class="col-4 col-md-4 text-end">
                                        <div class="d-flex align-items-center justify-content-end mb-1">
                                            <button class="quantity-btn btn-minus">-</button>
                                            <span class="mx-2 qty">1</span>
                                            <button class="quantity-btn btn-plus">+</button>
                                        </div>
                                        <div class="fw-bold">₹<span class="subtotal">1104.15</span></div>
                                    </div>
                                </div>

                                <!-- Cart Summary -->
                                <div class="border-top pt-3 mt-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Subtotal:</span>
                                        <span id="cart-subtotal">₹1613.30</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 text-success">
                                        <span>Discount (15%):</span>
                                        <span id="cart-discount">-₹284.70</span>
                                    </div>
                                    <div class="d-flex justify-content-between fw-bold pt-2 border-top">
                                        <span>Total:</span>
                                        <span id="cart-total">₹1613.30</span>
                                    </div>
                                </div>

                                <!-- Checkout Button -->
                                <div class="text-center mt-4">
                                    <button id="confirm-btn" class="btn btn-primary rounded-pill">Confirm Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <!-- jQuery CDN (if not already included) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- Custom JS -->
            <script src="script.js"></script>
</body>

</html>