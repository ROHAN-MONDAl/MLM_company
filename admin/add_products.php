<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basanti Shopee</title>
    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.svg" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom css -->
    <link rel="stylesheet" href="../basanti_shopee/dashboard/style.css">
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

                </div>

            </div>
            <!-- End Dashboard Content -->

        </div>
    </div>
    <!-- End Main Content -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery CDN (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="../basanti_shopee/dashboard/script.js"></script>
    <script src="script.js"></script>
</body>

</html>