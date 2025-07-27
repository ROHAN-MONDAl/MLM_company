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

            <!-- User Profile Update Section -->
            <div class="dashboard-content">
                <div class="container-fluid">
                    <!-- Heading -->
                    <div class="row mb-2 mt-3">
                        <div class="col-12">
                            <h4 class="profile-heading text-center">
                                <i class="fas fa-user-cog me-2"></i>Update Credentials
                            </h4>
                        </div>
                    </div>

                    <!-- Main Form Card -->
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="profile-card p-4 shadow-lg">
                                <form>
                                    <div class="row">
                                        <!-- Username -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="username" class="form-label"><i class="fas fa-user me-2"></i>Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="fas fa-at"></i></span>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter your username">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Current Password -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="current-password" class="form-label"><i class="fas fa-lock me-2"></i>Current Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="fas fa-key"></i></span>
                                                    <input type="password" class="form-control" id="current-password" placeholder="Current password">
                                                    <button class="btn btn-outline-secondary toggle-password" type="button" toggle="#current-password">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- New Password -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="new-password" class="form-label"><i class="fas fa-lock me-2"></i>New Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="fas fa-key"></i></span>
                                                    <input type="password" class="form-control" id="new-password" placeholder="New password">
                                                    <button class="btn btn-outline-secondary toggle-password" type="button" toggle="#new-password">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="confirm-password" class="form-label"><i class="fas fa-lock me-2"></i>Confirm Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="fas fa-key"></i></span>
                                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                                                    <button class="btn btn-outline-secondary toggle-password" type="button" toggle="#confirm-password">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password Requirements -->
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <div class="password-requirements p-3 bg-light rounded">
                                                <p class="mb-2"><strong>Password Requirements:</strong></p>
                                                <ul class="list-unstyled mb-0 row">
                                                    <li class="col-md-3"><i class="fas fa-check-circle text-success me-2"></i>8+ characters</li>
                                                    <li class="col-md-3"><i class="fas fa-check-circle text-success me-2"></i>1 uppercase</li>
                                                    <li class="col-md-3"><i class="fas fa-check-circle text-success me-2"></i>1 number</li>
                                                    <li class="col-md-3"><i class="fas fa-check-circle text-success me-2"></i>1 special character</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-md px-5 py-2 shadow-sm">
                                                <i class="fas fa-check-circle me-2"></i>Update
                                            </button>
                                        </div>
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
            <script src="script.js"></script>
</body>

</html>