<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-subway"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IRV</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (in_groups('superadmin')) : ?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= uri_string() == '/' ? 'active' : '' ?>">
            <a class="nav-link " href="<?= base_url(); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php endif; ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Railway Station - Railway Station -->
    <li class="nav-item <?= uri_string() == 'stations' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('stations'); ?>">
            <i class="fas fa-fw fa-train"></i>
            <span>Railway Station</span></a>
    </li>

    <?php if (in_groups('superadmin')) : ?>
        <!-- Nav Item - Positions -->
        <li class="nav-item <?= uri_string() == 'positions' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('positions'); ?>">
                <i class="fas fa-fw fa-pallet"></i>
                <span>Device Position</span></a>
        </li>
    <?php endif; ?>

    <!-- Nav Item - Device -->
    <li class="nav-item <?= uri_string() == 'device' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('device'); ?>">
            <i class="fas fa-fw fa-pallet"></i>
            <span>Device</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?= uri_string() == 'map' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('map'); ?>">
            <i class="fas fa-fw fa-map"></i>
            <span>Map</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if (in_groups('superadmin')) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            User
        </div>

        <!-- Nav Item - User -->
        <li class="nav-item <?= uri_string() == 'manage-admin' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('manage-admin'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Administrator</span></a>
        </li>

        <li class="nav-item <?= uri_string() == 'user' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php endif; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>