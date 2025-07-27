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


            <!-- Dashboard Content with Tabs -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4">
                    <div class="dashboard-tab-container">
                        <!-- Tab Buttons -->
                        <div class="dashboard-tab-buttons d-flex justify-content-center">
                            <div class="d-flex overflow-auto flex-nowrap gap-2">
                                <button class="btn btn-outline-primary btn-sm dashboard-tab-button active" data-tab="tab1">Overview</button>
                                <button class="btn btn-outline-primary btn-sm dashboard-tab-button" data-tab="tab2">Requests</button>
                                <button class="btn btn-outline-primary btn-sm dashboard-tab-button" data-tab="tab3">Featured Page</button>
                            </div>

                        </div>

                        <!-- Overview Tab -->
                        <div class="dashboard-tab-content" id="tab1">
                            <div class="container">
                                <h2 class="dashboard-section-title"><b>Business Overview</b></h2>
                                <p class="dashboard-section-subtitle">Quick insights into operations and growth</p>

                                <div class="dashboard-cards-container">
                                    <!-- Registration Requests -->
                                    <div class="dashboard-summary-card" style="--card-color: #ff8787; --card-color-rgb: 255, 135, 135;">
                                        <div class="dashboard-card-icon"><i class="fas fa-user-plus"></i></div>
                                        <h3 class="dashboard-card-title">Registration Requests</h3>
                                        <div class="dashboard-card-number">892</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 9%</div>
                                    </div>

                                    <!-- Product Categories -->
                                    <div class="dashboard-summary-card" style="--card-color: #4dabf7; --card-color-rgb: 77, 171, 247;">
                                        <div class="dashboard-card-icon"><i class="fas fa-th-large"></i></div>
                                        <h3 class="dashboard-card-title">Product Categories</h3>
                                        <div class="dashboard-card-number">24</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 12%</div>
                                    </div>

                                    <!-- Inventory Items -->
                                    <div class="dashboard-summary-card" style="--card-color: #40c057; --card-color-rgb: 64, 192, 87;">
                                        <div class="dashboard-card-icon"><i class="fas fa-cubes"></i></div>
                                        <h3 class="dashboard-card-title">Inventory Items</h3>
                                        <div class="dashboard-card-number">1,842</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 5%</div>
                                    </div>

                                    <!-- Distribution Partners -->
                                    <div class="dashboard-summary-card" style="--card-color: #f783ac; --card-color-rgb: 247, 131, 172;">
                                        <div class="dashboard-card-icon"><i class="fas fa-handshake"></i></div>
                                        <h3 class="dashboard-card-title">Distribution Partners</h3>
                                        <div class="dashboard-card-number">47</div>
                                        <div class="dashboard-card-badge dashboard-trend-neutral"><i class="fas fa-equals"></i> 0%</div>
                                    </div>

                                    <!-- Groups (Customer Segments) -->
                                    <div class="dashboard-summary-card" style="--card-color: #748ffc; --card-color-rgb: 116, 143, 252;">
                                        <div class="dashboard-card-icon"><i class="fas fa-users-cog"></i></div>
                                        <h3 class="dashboard-card-title">Customer Groups</h3>
                                        <div class="dashboard-card-number">12</div>
                                        <div class="dashboard-card-badge dashboard-trend-down"><i class="fas fa-arrow-down"></i> 3%</div>
                                    </div>

                                    <!-- Account Balance -->
                                    <div class="dashboard-summary-card" style="--card-color: #fcc419; --card-color-rgb: 252, 196, 25;">
                                        <div class="dashboard-card-icon"><i class="fas fa-coins"></i></div>
                                        <h3 class="dashboard-card-title">Account Balance</h3>
                                        <div class="dashboard-card-number">$184K</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 8%</div>
                                    </div>

                                    <!-- Total Inventory Value -->
                                    <div class="dashboard-summary-card" style="--card-color: #9775fa; --card-color-rgb: 151, 117, 250;">
                                        <div class="dashboard-card-icon"><i class="fas fa-dolly-flatbed"></i></div>
                                        <h3 class="dashboard-card-title">Total Inventory Value</h3>
                                        <div class="dashboard-card-number">$2.4M</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 15%</div>
                                    </div>

                                    <!-- Registered Members -->
                                    <div class="dashboard-summary-card" style="--card-color: #20c997; --card-color-rgb: 32, 201, 151;">
                                        <div class="dashboard-card-icon"><i class="fas fa-user-friends"></i></div>
                                        <h3 class="dashboard-card-title">Registered Members</h3>
                                        <div class="dashboard-card-number">3,241</div>
                                        <div class="dashboard-card-badge dashboard-trend-up"><i class="fas fa-arrow-up"></i> 7%</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Upcoming Requests -->
                        <div class="dashboard-tab-content" id="tab2" style="display: none;">
                            <h2 class="dashboard-section-title"><b>Registration Requests</b></h2>
                            <p class="dashboard-section-subtitle">Manage incoming registration requests</p>
                            <div class="dashboard-box-container">

                                <div class="dashboard-profile-grid">
                                    <!-- Card 1 -->
                                    <div class="dashboard-profile-card">
                                        <div class="dashboard-card-wrapper">
                                            <div class="dashboard-profile-image">
                                                <img src="../images/logo.jpeg" alt="Profile">
                                            </div>
                                            <div class="dashboard-profile-details">
                                                <h4>John Doe</h4>
                                                <p>ID: MEM12345</p>
                                            </div>
                                            <div class="dashboard-profile-actions">
                                                <button class="dashboard-action-btn dashboard-view-btn" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="dashboard-action-btn dashboard-accept-btn" title="Accept">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="dashboard-action-btn dashboard-reject-btn" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add more cards as needed -->
                                </div>
                            </div>
                        </div>

                        <!-- Home Page Tab -->
                        <!-- Inside your tab3 -->
                        <div class="dashboard-tab-content" id="tab3" style="display: none;">
                            <h2 class="dashboard-section-title"><b>Featured Page</b></h2>
                            <p class="dashboard-section-subtitle">Manage the content displayed on the featured page</p>
                            <div class="dashboard-box-container">
                                <!-- Featured Forms Start -->

                                <!-- Banner Upload -->
                                <form class="mb-4 p-3 border rounded bg-light">
                                    <h5><i class="fas fa-image me-2"></i>Upload Banner</h5>
                                    <div class="mb-3">
                                        <label for="bannerImage" class="form-label">Choose Banner Image</label>
                                        <input type="file" class="form-control" id="bannerImage" accept="image/*">
                                    </div>
                                    <button type="submit" class="btn btn-primary mx-auto d-block">
                                        <i class="fas fa-upload me-1"></i>Upload Banner
                                    </button>
                                </form>

                                <!-- Featured Product Upload -->
                                <form class="p-3 border rounded bg-light">
                                    <h5><i class="fas fa-star me-2"></i>Add Featured Product</h5>

                                    <!-- Product Image -->
                                    <div class="mb-3">
                                        <label for="productImage" class="form-label">Product Image</label>
                                        <input type="file" class="form-control" id="productImage" accept="image/*">
                                    </div>

                                    <!-- Product Name -->
                                    <div class="mb-3">
                                        <label for="productName" class="form-label"><i class="fas fa-tag me-2"></i>Product Name</label>
                                        <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                                    </div>

                                    <!-- Product Price -->
                                    <div class="mb-3">
                                        <label for="productPrice" class="form-label"><i class="fas fa-rupee-sign me-2"></i>Price</label>
                                        <input type="number" class="form-control" id="productPrice" placeholder="Enter product price">
                                    </div>

                                    <!-- Product Description -->
                                    <div class="mb-3">
                                        <label for="productDesc" class="form-label"><i class="fas fa-align-left me-2"></i>Description</label>
                                        <textarea class="form-control" id="productDesc" rows="3" placeholder="Enter product description"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-success mx-auto d-block">
                                        <i class="fas fa-plus me-1"></i>Add Product
                                    </button>
                                </form>
                                <!-- Featured Forms End -->

                            </div>
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
</body>

</html>