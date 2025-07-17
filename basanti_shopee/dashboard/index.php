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
                    <!-- Dashboard Title -->
                    <h1 class="dashboard-title text-center">Welcome to Our Store</h1>

                    <!-- Auto-scrolling Full-width Banner -->
                    <div class="banner-container">
                        <div class="banner-scroll">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Banner 1"
                                class="banner-img">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Banner 2"
                                class="banner-img">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Banner 3"
                                class="banner-img">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Banner 1"
                                class="banner-img"> <!-- Duplicate for seamless looping -->
                        </div>
                    </div>

                    <!-- Shop by Category Title -->
                    <h3 class="section-title">Shop by Category</h3>

                    <!-- Search Bar with Filter Icon -->
                    <div class="search-container">
                        <input type="text" class="search-bar" placeholder="Search for products...">
                        <div class="filter-icon">
                            <i class="fas fa-filter"></i>
                        </div>
                    </div>

                    <!-- Categories Horizontal Scroll -->
                    <div class="categories-container">
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Electronics"
                                class="category-img">
                            <span class="category-name">Electronics</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Fashion"
                                class="category-img">
                            <span class="category-name">Fashion</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Home"
                                class="category-img">
                            <span class="category-name">Home</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Beauty"
                                class="category-img">
                            <span class="category-name">Beauty</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Sports"
                                class="category-img">
                            <span class="category-name">Sports</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Toys"
                                class="category-img">
                            <span class="category-name">Toys</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Books"
                                class="category-img">
                            <span class="category-name">Books</span>
                        </div>
                        <div class="category-item">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Groceries"
                                class="category-img">
                            <span class="category-name">Groceries</span>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <h3 class="section-title">Featured Products</h3>
                    <div class="products-container">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 1"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Wireless Headphones</h4>
                                <p class="product-price">$59.99</p>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 2"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Smart Watch</h4>
                                <p class="product-price">$129.99</p>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 3"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Bluetooth Speaker</h4>
                                <p class="product-price">$39.99</p>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 4"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Laptop Backpack</h4>
                                <p class="product-price">$45.50</p>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 5"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Coffee Maker</h4>
                                <p class="product-price">$89.99</p>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 6"
                                class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Fitness Tracker</h4>
                                <p class="product-price">$79.99</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="dashboard-footer">
                <div class="footer-buttons">
                    <a href="product_cart.php"> <button class="btn-circle btn-cart" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button></a>
                    <button class="btn-circle btn-wishlist" title="Wishlist">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="btn-circle btn-share" title="Share">
                        <i class="fas fa-share-alt"></i>
                    </button>
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