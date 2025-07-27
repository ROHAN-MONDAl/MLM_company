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
    <link rel="stylesheet" href="../basanti_shopee/dashboard/style.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css2.css">
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

            <!-- User Profile Update Section -->
            <div class="dashboard-content">
                <div class="container-fluid profile-container">
                    <!-- Heading -->
                    <h4 class="profile-heading">
                        <i class="fas fa-user-cog me-2"></i>Update Your Profile
                    </h4>

                    <div class="row d-flex justify-content-center">
            
                        <!-- Right Column - Personal Information -->
                        <div class="col-lg-8">
                            <div class="profile-info-card">
                                <form>
                                    <!-- Upload Photo -->
                                    <div class="form-group">
                                        <label for="photo" class="form-label"><i class="fas fa-camera me-2"></i>Upload Photo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-upload"></i></span>
                                            <input type="file" class="form-control" id="photo" accept="image/*" required>
                                        </div>
                                    </div>

                                    <!-- Full Name -->
                                    <div class="form-group">
                                        <label for="full-name" class="form-label"><i class="fas fa-user me-2"></i>Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            <input type="text" class="form-control" id="full-name" placeholder="Enter your full name" required>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-actions d-flex justify-content-center">
                                        <button type="submit" class="submit-btn">
                                            <i class="fas fa-check-circle me-2"></i>Update Profile
                                        </button>
                                    </div>
                                </form>

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
            <script src="../basanti_shopee/dashboard/script.js"></script>
            <script src="assets/script.js"></script>
            <script src="assets/js2.js"></script>
</body>

</html>