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


            <!-- Dashboard Content with Tabs -->
            <div class="dashboard-content">
                <div class="container-fluid p-3 p-md-4">

                    <div class="tab-container">
                        <!-- Tab Buttons -->
                        <div class="tab-buttons">
                            <button class="tab-button active" data-tab="overview">Dashboard Overview</button>
                            <button class="tab-button" data-tab="requests">Upcoming Requests</button>
                        </div>

                        <!-- Overview Tab -->
                        <div class="tab-content" id="overview">
                            <div class="container">
                                <h2 class="section-title">Business Snapshot</h2>
                                <p class="section-subtitle">Quick insights into operations and growth</p>


                                <div class="cards-container">

                                    <!-- Registration Requests -->
                                    <div class="summary-card" style="--card-color: #ff8787;">
                                        <div class="card-icon"><i class="fas fa-user-plus"></i></div> <!-- Icon changed to user-plus -->
                                        <h3 class="card-title">Registration Requests</h3>
                                        <div class="card-number">892</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 9%</div>
                                    </div>

                                    <!-- Product Categories -->
                                    <div class="summary-card" style="--card-color: #4dabf7;">
                                        <div class="card-icon"><i class="fas fa-th-large"></i></div> <!-- Icon changed to th-large -->
                                        <h3 class="card-title">Product Categories</h3>
                                        <div class="card-number">24</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 12%</div>
                                    </div>

                                    <!-- Inventory Items -->
                                    <div class="summary-card" style="--card-color: #40c057;">
                                        <div class="card-icon"><i class="fas fa-cubes"></i></div> <!-- Icon changed to cubes -->
                                        <h3 class="card-title">Inventory Items</h3>
                                        <div class="card-number">1,842</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 5%</div>
                                    </div>

                                    <!-- Distribution Partners -->
                                    <div class="summary-card" style="--card-color: #f783ac;">
                                        <div class="card-icon"><i class="fas fa-handshake"></i></div> <!-- Icon changed to handshake -->
                                        <h3 class="card-title">Distribution Partners</h3>
                                        <div class="card-number">47</div>
                                        <div class="card-badge trend-neutral"><i class="fas fa-equals"></i> 0%</div>
                                    </div>

                                    <!-- Groups (Customer Segments) -->
                                    <div class="summary-card" style="--card-color: #748ffc;">
                                        <div class="card-icon"><i class="fas fa-users-cog"></i></div> <!-- Icon changed to users-cog -->
                                        <h3 class="card-title">Customer Groups</h3>
                                        <div class="card-number">12</div>
                                        <div class="card-badge trend-down"><i class="fas fa-arrow-down"></i> 3%</div>
                                    </div>

                                    <!-- Account Balance -->
                                    <div class="summary-card" style="--card-color: #fcc419;">
                                        <div class="card-icon"><i class="fas fa-coins"></i></div> <!-- Icon changed to coins -->
                                        <h3 class="card-title">Account Balance</h3>
                                        <div class="card-number">$184K</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 8%</div>
                                    </div>

                                    <!-- Total Inventory Value -->
                                    <div class="summary-card" style="--card-color: #9775fa;">
                                        <div class="card-icon"><i class="fas fa-dolly-flatbed"></i></div> <!-- Icon changed to dolly-flatbed -->
                                        <h3 class="card-title">Total Inventory Value</h3>
                                        <div class="card-number">$2.4M</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 15%</div>
                                    </div>

                                    <!-- Registered Members -->
                                    <div class="summary-card" style="--card-color: #20c997;">
                                        <div class="card-icon"><i class="fas fa-user-friends"></i></div> <!-- Icon changed to user-friends -->
                                        <h3 class="card-title">Registered Members</h3>
                                        <div class="card-number">3,241</div>
                                        <div class="card-badge trend-up"><i class="fas fa-arrow-up"></i> 7%</div>
                                    </div>

                                </div>
                            </div>
                        </div>


                       
                        <!-- Upcoming Requests -->
 <!-- Upcoming Requests -->
                        <div class="tab-content" id="requests">
                            <div class="box-container">
                                <div class="card-grid">
                                    <!-- Card 1 -->
                                    <div class="profile-card">
                                        <div class="black-border">
                                            <div class="profile-pic">
                                                <img src="https://via.placeholder.com/80" alt="Profile">
                                            </div>
                                            <div class="profile-info">
                                                <h4>John Doe</h4>
                                                <p>ID: MEM12345</p>
                                            </div>
                                            <div class="profile-actions">
                                                <button class="circle-btn view-btn" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="circle-btn accept-btn" title="Accept">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="circle-btn reject-btn" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="profile-card">
                                        <div class="black-border">
                                            <div class="profile-pic">
                                                <img src="https://via.placeholder.com/80" alt="Profile">
                                            </div>
                                            <div class="profile-info">
                                                <h4>Jane Smith</h4>
                                                <p>ID: MEM67890</p>
                                            </div>
                                            <div class="profile-actions">
                                                <button class="circle-btn view-btn" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="circle-btn accept-btn" title="Accept">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="circle-btn reject-btn" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add more cards as needed -->
                                </div>
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
    <script src="script.js"></script>
</body>

</html>