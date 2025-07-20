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
        <?php include 'sidebar.php'; ?>
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="dashboard-body">
            <!-- Header inside body -->
            <?php include 'header.php'; ?>

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
                        <a href="categories_products.php" style="text-decoration: none;">
                            <div class="category-item">
                                <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Electronics"
                                    class="category-img">
                                <span class="category-name">GROCERY</span>

                            </div>
                        </a>

                    </div>

                    <!-- Products Grid -->
                    <h3 class="section-title">Featured Products</h3>
                    <div class="products-container">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <img src="https://naturo.in/cdn/shop/files/juices.jpg?v=1739161819" alt="Product 1" class="product-img">
                            <div class="product-info">
                                <h4 class="product-name">Wireless Headphones</h4>
                                <p class="product-price">$59.99</p>
                                <button class="add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                        <!-- Product 1 -->
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <?php include 'footer.php'; ?>

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