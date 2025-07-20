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