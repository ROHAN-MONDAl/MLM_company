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

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4 d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="card shadow-lg border border-primary rounded-4 p-4">

                            <h3 class="text-center mb-4"><i class="fas fa-box-open me-2"></i>Add Product</h3>
                            <form id="productForm" novalidate>
                                <!-- Image Upload -->
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-image me-1"></i>Product Image</label>
                                    <input type="file" class="form-control" id="productImage" required>
                                    <div class="invalid-feedback">Please upload an image.</div>
                                </div>

                                <!-- Category Name -->
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-list me-1"></i>Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" maxlength="30" required>
                                    <div class="invalid-feedback">Category must be 3–30 characters.</div>
                                </div>

                                <!-- Product Name -->
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-tag me-1"></i>Product Name</label>
                                    <input type="text" class="form-control" id="productName" maxlength="50" required>
                                    <div class="invalid-feedback">Product name must be 3–50 characters.</div>
                                </div>

                                <!-- Short Description -->
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-align-left me-1"></i>Short Description</label>
                                    <textarea class="form-control" id="shortDesc" maxlength="200" rows="3" required></textarea>
                                    <div class="invalid-feedback">Description must be 10–200 characters.</div>
                                </div>

                                <!-- Amount -->
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-dollar-sign me-1"></i>Amount</label>
                                    <input type="number" class="form-control" id="amount" min="0" required>
                                    <div class="invalid-feedback">Please enter a valid amount.</div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane me-1"></i>Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script src="assets/script.js"></script>
    <script src="assets/js2.js"></script>
</body>

</html>