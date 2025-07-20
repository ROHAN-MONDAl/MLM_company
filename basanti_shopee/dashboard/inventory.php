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
                  Inventories
                </h4>

                <!-- Products Grid -->
                <div class="row g-4">

                    <!-- Product Card -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="rounded-4 shadow border h-100 text-center p-3"
                            style="background-color: var(--color-light); border-color: var(--color-blue); box-shadow: 0 4px 16px rgba(0,0,0,0.1);">

                            <!-- Product Image -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPlR8VLbbAtkIHBFupuPXXIoYxJhiXv5ScPlSJi67xXOVpugyssdA6HkD0dpvGpPx__dAIvQ&s"
                                alt="Product"
                                class="mb-3 img-fluid"
                                style="width: 100%; height: 120px; object-fit: cover; border-radius: 12px; border: 2px solid var(--color-yellow);">

                            <!-- Product Title -->
                            <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Organic Honey</h6>

                            <!-- Product Description -->
                            <p class="small text-muted mb-2">
                                100% pure wild honey harvested from natural sources.
                            </p>

                            <!-- Product Price -->
                            <div class="fw-semibold" style="color: var(--color-blue);">
                                ₹450
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- jQuery CDN (if not already included) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Custom JS -->
            <script src="script.js"></script>
</body>

</html>