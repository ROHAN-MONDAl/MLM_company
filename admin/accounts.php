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

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4">

                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Accounts
                    </h4>

                    <!-- Account Summary Card -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="rounded-4 shadow border p-4" style="background-color: var(--color-light); border-color: var(--color-blue);">
                                <div class="row">
                                    <!-- Account Balance -->
                                    <div class="col-md-12 text-center border-end">
                                        <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Current Balance</h6>
                                        <div class="display-5 fw-bold" style="color: var(--color-blue);">₹12,450.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transactions Table -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="rounded-4 shadow border p-3" style="background-color: var(--color-light); border-color: var(--color-blue);">
                                <h5 class="fw-bold mb-3" style="color: var(--color-navy);">Transaction History</h5>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background-color: var(--color-blue); color: white;">
                                            <tr>
                                                <th class="text-nowrap">Date</th>
                                                <th>Description</th>
                                                <th class="text-nowrap">By Reference</th>
                                                <th class="text-nowrap">Credit</th>
                                                <th class="text-nowrap">Debit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="transactionTableBody">
                                            <!-- Sample Rows (repeat or generate more for testing) -->
                                            <tr class="text-wrap">
                                                <td class="text-nowrap">15 Jul 2023</td>
                                                <td class="text-wrap">Salary Credit</td>
                                                <td class="text-nowrap">SAL-0723-001</td>
                                                <td class="text-success fw-bold">₹12,000.00</td>
                                                <td class="text-danger fw-bold">₹0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <nav>
                                    <ul class="pagination justify-content-center mt-3" id="pagination"></ul>
                                </nav>
                            </div>
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