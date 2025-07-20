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
                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Group Members
                    </h4>
                    <p class="text-lg-start text-center fw-bold fs-4 mt-3 mx-auto">Total Members: <b>2</b></p>
                    <!-- Members Grid -->
                    <div class="row g-4">
                        <!-- Member Card -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="text-center p-3 rounded-4 shadow border h-100"
                                style="background-color: var(--color-light); border-color: var(--color-blue); box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">

                                <!-- Profile Photo -->
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPlR8VLbbAtkIHBFupuPXXIoYxJhiXv5ScPlSJi67xXOVpugyssdA6HkD0dpvGpPx__dAIvQ&s"
                                    alt="Member Photo"
                                    class="mb-3"
                                    style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; border: 3px solid var(--color-yellow); box-shadow: 0 2px 8px rgba(0,0,0,0.15);">

                                <!-- Member Name -->
                                <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Rohan Mondal</h6>

                                <!-- Member ID -->
                                <p class="text-muted small mb-0">Member ID: 001</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="text-center p-3 rounded-4 shadow border h-100"
                                style="background-color: var(--color-light); border-color: var(--color-blue); box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">

                                <!-- Profile Photo -->
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPlR8VLbbAtkIHBFupuPXXIoYxJhiXv5ScPlSJi67xXOVpugyssdA6HkD0dpvGpPx__dAIvQ&s"
                                    alt="Member Photo"
                                    class="mb-3"
                                    style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; border: 3px solid var(--color-yellow); box-shadow: 0 2px 8px rgba(0,0,0,0.15);">

                                <!-- Member Name -->
                                <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Rohan Mondal</h6>

                                <!-- Member ID -->
                                <p class="text-muted small mb-0">Member ID: 001</p>
                            </div>
                        </div>
                        <!-- Add more cards here -->
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