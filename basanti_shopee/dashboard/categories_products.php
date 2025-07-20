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

            <!-- Product Inventory Section -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4">
                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Products
                    </h4>

                    <!-- Products Grid -->
                    <div class="row g-4">

                        <!-- Product Card -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
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
                </div>

                      <!-- Footer -->
            <?php include 'footer.php'; ?>

                <!-- jQuery CDN (if not already included) -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Custom JS -->
                <script src="script.js"></script>
</body>

</html>