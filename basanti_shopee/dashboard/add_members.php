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
                <div class="container-fluid p-3 p-md-4" style="max-width: 600px; margin: 0 auto;">

                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Membership Registration
                    </h4>

                    <!-- Membership Form -->
                    <form action="" method="POST" class="needs-validation">
                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label for="phone" class="form-label fw-bold" style="color: var(--color-navy);">
                                Phone Number <span class="text-danger">*</span>
                            </label>
                            <input
                                type="tel"
                                class="form-control py-2"
                                id="phone"
                                name="phone"
                                pattern="[6-9][0-9]{9}"
                                maxlength="10"
                                minlength="10"
                                inputmode="numeric"
                                style="border-color: var(--color-blue);"
                                placeholder="Enter 10-digit phone number"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid 10-digit phone number starting with 6, 7, 8, or 9.
                            </div>
                        </div>

                        <!-- PAN Number -->
                        <div class="mb-4">
                            <label for="pan" class="form-label fw-bold" style="color: var(--color-navy);">
                                PAN Number <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                class="form-control py-2"
                                id="pan"
                                name="pan"
                                pattern="[A-Z]{5}[0-9]{4}[A-Z]"
                                maxlength="10"
                                minlength="10"
                                style="border-color: var(--color-blue); text-transform: uppercase;"
                                placeholder="ABCDE1234F"
                                oninput="this.value = this.value.toUpperCase();"
                                autocomplete="off"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid PAN number (e.g., ABCDE1234F).
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn py-2 fw-bold"
                                style="background-color: var(--color-yellow); color: var(--color-navy);">
                                Submit Application
                            </button>
                        </div>
                    </form>
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