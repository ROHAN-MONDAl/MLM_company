<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Sidebar -->
<div class="sidebar-nav">
    <!-- User Profile Section -->
    <div class="user-profile-section d-flex align-items-center">
        <div class="user-avatar">
            <img src="https://i.pinimg.com/736x/1c/bc/58/1cbc5864a867efcc76c89c00c2ca530a.jpg" alt="User Avatar" class="user-avatar">
        </div>
        <div class="user-info ms-auto text-end">
            <div class="username fw-bold text-truncate">John Doe</div>
            <div class="user-rank text-truncate">
                <i class="fas fa-crown text-warning"></i>
                <span class="nav-text">Admin</span>
            </div>
        </div>
    </div>
    <hr class="hr-line" />

    <!-- Scrollable menu -->
    <div class="sidebar-menu">
        <ul class="nav flex-column w-100">
            <!-- Overview -->
            <li>
                <a href="index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Overview</span>
                </a>
            </li>

            <!-- Dropdown: Inventory -->
            <li>
                <a class="nav-link dropdown-toggle <?= in_array($current_page, ['add_products.php', 'all_categories.php', 'products.php']) ? '' : 'collapsed' ?>"
                    data-bs-toggle="collapse" href="#InventoryMenu"
                    role="button" aria-expanded="<?= in_array($current_page, ['add_products.php', 'all_categories.php', 'products.php']) ? 'true' : 'false' ?>" aria-controls="InventoryMenu">
                    <i class="fas fa-boxes"></i>
                    <span class="nav-text">Inventories</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['add_products.php', 'all_categories.php', 'products.php']) ? 'show' : '' ?>"
                    id="InventoryMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="add_products.php" class="nav-link <?= ($current_page == 'add_products.php') ? 'active' : '' ?>">
                                <i class="fa-brands fa-product-hunt"></i>
                                <span class="nav-text">Add Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="all_categories.php" class="nav-link <?= ($current_page == 'all_categories.php') ? 'active' : '' ?>">
                                <i class="fas fa-box"></i>
                                <span class="nav-text">All Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="products.php" class="nav-link <?= ($current_page == 'products.php') ? 'active' : '' ?>">
                                <i class="fas fa-layer-group"></i>
                                <span class="nav-text">Products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Dropdown: Distributors -->
            <li>
                <a class="nav-link dropdown-toggle <?= in_array($current_page, ['all_distributors.php', 'distributor_groups.php']) ? '' : 'collapsed' ?>"
                    data-bs-toggle="collapse" href="#DistributorsMenu"
                    role="button" aria-expanded="<?= in_array($current_page, ['all_distributors.php', 'distributor_groups.php']) ? 'true' : 'false' ?>"
                    aria-controls="DistributorsMenu">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Distributors</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['all_distributors.php', 'distributor_groups.php']) ? 'show' : '' ?>"
                    id="DistributorsMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="all_distributors.php" class="nav-link <?= ($current_page == 'all_distributors.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-friends"></i>
                                <span class="nav-text">All Distributors</span>
                            </a>
                        </li>
                        <li>
                            <a href="distributor_groups.php" class="nav-link <?= ($current_page == 'distributor_groups.php') ? 'active' : '' ?>">
                                <i class="fas fa-layer-group"></i>
                                <span class="nav-text">Groups</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Accounts -->
            <li>
                <a href="accounts.php" class="nav-link <?= ($current_page == 'accounts.php') ? 'active' : '' ?>">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span class="nav-text">Accounts</span>
                </a>
            </li>

            <!-- Settings -->
            <li>
                <a class="nav-link dropdown-toggle <?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? '' : 'collapsed' ?>"
                    data-bs-toggle="collapse" href="#settingsMenu"
                    role="button" aria-expanded="<?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? 'true' : 'false' ?>"
                    aria-controls="settingsMenu">
                    <i class="fas fa-cogs"></i>
                    <span class="nav-text">Settings</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? 'show' : '' ?>"
                    id="settingsMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="settings_profile.php" class="nav-link <?= ($current_page == 'settings_profile.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-cog"></i>
                                <span class="nav-text">Profile Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings_security.php" class="nav-link <?= ($current_page == 'settings_security.php') ? 'active' : '' ?>">
                                <i class="fas fa-shield-alt"></i>
                                <span class="nav-text">Security</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Logout -->
            <li>
                <a href="logout.php" class="nav-link <?= ($current_page == 'logout.php') ? 'active' : '' ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End of Sidebar -->