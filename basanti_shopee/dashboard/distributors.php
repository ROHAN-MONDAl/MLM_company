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
                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Our Distributors
                    </h4>

                    <!-- Distributors Grid -->
                    <div class="row g-4">

                        <!-- Distributor Card -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="text-center p-3 rounded-4 shadow border h-100"
                                style="background-color: var(--color-light); border-color: var(--color-blue); box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">

                                <!-- Super Stock Title -->
                                <div class="mb-2">
                                    <span class="badge text-bg-primary px-3 py-1 fw-semibold"
                                        style="background-color: var(--color-yellow); color: var(--color-navy); border-radius: 20px;">
                                        Super Stock
                                    </span>
                                </div>

                                <!-- Profile Photo -->
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPlR8VLbbAtkIHBFupuPXXIoYxJhiXv5ScPlSJi67xXOVpugyssdA6HkD0dpvGpPx__dAIvQ&s"
                                    alt="Distributor Photo"
                                    class="mb-3"
                                    style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; border: 3px solid var(--color-yellow); box-shadow: 0 2px 8px rgba(0,0,0,0.15);">

                                <!-- Distributor Name -->
                                <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Rohan Mondal</h6>

                                <!-- Badge -->
                                <div class="mb-1">
                                    <span class="badge bg-secondary small" style="background-color: var(--color-blue);">
                                        Stockist
                                    </span>
                                </div>

                                <!-- Phone Number -->
                                <p class="text-muted small mb-0">+91 9876543210</p>
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