<?php
// Get current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Sidebar -->
<div class="sidebar-nav">
    <!-- User Profile Section -->
    <div class="user-profile-section d-flex align-items-center">
        <div class="user-avatar me-3">
            <img src="https://i.pinimg.com/736x/1c/bc/58/1cbc5864a867efcc76c89c00c2ca530a.jpg" alt="User Avatar" srcset="" class="user-avatar">
        </div>
        <div class="user-info">
            <div class="username fw-bold text-truncate">John Doe</div>
            <div class="user-rank text-truncate">
               <small><i class="fas fa-crown text-warning mx-2"></i></small>
                <span>Premium Member</span>
            </div>
        </div>
    </div>
    <hr class="hr-line" />

    <!-- Scrollable menu -->
    <div class="sidebar-menu">
        <ul class="nav flex-column w-100">
            <li>
                <a href="<?= basename('index.php') ?>" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">
                    <i class="fas fa-home"></i>
                    <span>Overview</span>
                </a>
            </li>

            <!-- Dropdown: Membership -->
            <li>
                <a class="nav-link dropdown-toggle <?= in_array($current_page, ['add_members.php', 'members.php']) ? '' : 'collapsed' ?>"
                    data-bs-toggle="collapse" href="#MembershipMenu"
                    role="button" aria-expanded="<?= in_array($current_page, ['add_members.php', 'members.php']) ? 'true' : 'false' ?>"
                    aria-controls="MembershipMenu">
                    <i class="fas fa-users"></i>
                    <span class="mx-2">Groups</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['add_members.php', 'members.php']) ? 'show' : '' ?>"
                    id="MembershipMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="<?= basename('members.php') ?>" class="nav-link <?= ($current_page == 'members.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-friends"></i>
                                <span class="mx-2">Members</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="<?= basename('distributors.php') ?>" class="nav-link <?= ($current_page == 'distributors.php') ? 'active' : '' ?>">
                    <i class="fas fa-store-alt"></i>
                    <span>Distributors</span>
                </a>
            </li>

            <li>
                <a href="<?= basename('inventory.php') ?>" class="nav-link <?= ($current_page == 'inventory.php') ? 'active' : '' ?>">
                    <i class="fas fa-boxes"></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li>
                <a href="<?= basename('accounts.php') ?>" class="nav-link <?= ($current_page == 'accounts.php') ? 'active' : '' ?>">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Accounts</span>
                </a>
            </li>

            <!-- Dropdown: Settings -->
            <li>
                <a class="nav-link dropdown-toggle <?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? '' : 'collapsed' ?>"
                    data-bs-toggle="collapse" href="#settingsMenu"
                    role="button" aria-expanded="<?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? 'true' : 'false' ?>"
                    aria-controls="settingsMenu">
                    <i class="fas fa-cogs"></i>
                    <span class="mx-2">Settings</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['settings_profile.php', 'settings_security.php']) ? 'show' : '' ?>"
                    id="settingsMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="<?= basename('settings_profile.php') ?>" class="nav-link <?= ($current_page == 'settings_profile.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-cog"></i>
                                <span class="mx-2">Profile Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= basename('settings_security.php') ?>" class="nav-link <?= ($current_page == 'settings_security.php') ? 'active' : '' ?>">
                                <i class="fas fa-shield-alt"></i>
                                <span class="mx-2">Security</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="<?= basename('logout.php') ?>" class="nav-link <?= ($current_page == 'logout.php') ? 'active' : '' ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>