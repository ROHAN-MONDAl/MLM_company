<?php
// Get current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Sidebar -->
<div class="sidebar-nav">
    <!-- User Profile Section -->
    <div class="user-profile-section d-flex align-items-center">
        <div class="user-avatar me-3">
            <img src="data:image/jpeg;base64,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" alt="User Avatar" srcset="" class="user-avatar">
        </div>
        <div class="user-info">
            <div class="username fw-bold text-truncate">John Doe</div>
            <div class="user-rank text-truncate">
                <i class="fas fa-star text-warning me-1"></i>
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
                    <span class="mx-2">Members</span>
                    <i class="fas fa-chevron-down toggle-icon mx-auto"></i>
                </a>
                <div class="collapse dropdown-animated <?= in_array($current_page, ['add_members.php', 'members.php']) ? 'show' : '' ?>"
                    id="MembershipMenu">
                    <ul class="nav flex-column">
                        <li>
                            <a href="<?= basename('add_members.php') ?>" class="nav-link <?= ($current_page == 'add_members.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-plus"></i>
                                <span class="mx-2">Add Member</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= basename('members.php') ?>" class="nav-link <?= ($current_page == 'members.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-friends"></i>
                                <span class="mx-2">Member Groups</span>
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