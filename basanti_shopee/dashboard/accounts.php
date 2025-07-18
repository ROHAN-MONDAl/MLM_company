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
                    <!-- Account Details Section -->

                    <!-- Heading -->
                    <h4 class="mb-4 fw-bold text-center" style="color: var(--color-navy);">
                        Account Details
                    </h4>

                    <!-- Account Summary Card -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="rounded-4 shadow border p-4" style="background-color: var(--color-light); border-color: var(--color-blue);">
                                <div class="row">
                                    <!-- Account Balance -->
                                    <div class="col-md-4 text-center border-end">
                                        <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Current Balance</h6>
                                        <div class="display-5 fw-bold" style="color: var(--color-blue);">₹12,450.50</div>
                                        <small class="text-muted">As of today</small>
                                    </div>

                                    <!-- Credit Summary -->
                                    <div class="col-md-4 text-center border-end">
                                        <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Total Credits</h6>
                                        <div class="display-5 fw-bold" style="color: var(--color-green);">₹18,200.00</div>
                                        <small class="text-muted">This month</small>
                                    </div>

                                    <!-- Debit Summary -->
                                    <div class="col-md-4 text-center">
                                        <h6 class="fw-bold mb-1" style="color: var(--color-navy);">Total Debits</h6>
                                        <div class="display-5 fw-bold" style="color: var(--color-red);">₹5,749.50</div>
                                        <small class="text-muted">This month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transactions Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="rounded-4 shadow border p-3" style="background-color: var(--color-light); border-color: var(--color-blue);">
                                <h5 class="fw-bold mb-3" style="color: var(--color-navy);">Transaction History</h5>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background-color: var(--color-blue); color: white;">
                                            <tr>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Reference</th>
                                                <th class="text-end">Credit</th>
                                                <th class="text-end">Debit</th>
                                                <th class="text-end">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Sample Transaction Row -->
                                            <tr>
                                                <td>15 Jul 2023</td>
                                                <td>Salary Credit</td>
                                                <td>SAL-0723-001</td>
                                                <td class="text-end text-success fw-bold">₹12,000.00</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end fw-bold">₹15,200.00</td>
                                            </tr>

                                            <!-- Sample Transaction Row -->
                                            <tr>
                                                <td>12 Jul 2023</td>
                                                <td>Grocery Store</td>
                                                <td>POS-987654</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end text-danger fw-bold">₹2,450.50</td>
                                                <td class="text-end fw-bold">₹3,200.00</td>
                                            </tr>

                                            <!-- Sample Transaction Row -->
                                            <tr>
                                                <td>10 Jul 2023</td>
                                                <td>Interest Earned</td>
                                                <td>INT-0723</td>
                                                <td class="text-end text-success fw-bold">₹200.00</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end fw-bold">₹5,650.50</td>
                                            </tr>

                                            <!-- Sample Transaction Row -->
                                            <tr>
                                                <td>05 Jul 2023</td>
                                                <td>Electricity Bill</td>
                                                <td>EB-98765</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end text-danger fw-bold">₹1,200.00</td>
                                                <td class="text-end fw-bold">₹5,450.50</td>
                                            </tr>

                                            <!-- Sample Transaction Row -->
                                            <tr>
                                                <td>01 Jul 2023</td>
                                                <td>Initial Balance</td>
                                                <td>OPEN-BAL</td>
                                                <td class="text-end text-success fw-bold">₹6,650.50</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end fw-bold">₹6,650.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <nav aria-label="Transaction pagination">
                                    <ul class="pagination justify-content-center mt-3">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
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
        <script src="script.js"></script>
</body>

</html>