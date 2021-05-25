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
                <span>Sensor Position</span></a>
        </li>
    <?php endif; ?>

    <!-- Nav Item - Measurement -->
    <li class="nav-item <?= uri_string() == 'Measurement' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('Measurement'); ?>">
            <i class="fas fa-fw fa-pallet"></i>
            <span>Measurement</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?= uri_string() == 'map' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('map'); ?>">
            <i class="fas fa-fw fa-map"></i>
            <span>Map</span></a>
    </li>

    <li class="nav-item <?= uri_string() == 'data' || uri_string() == 'data/new' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataManagement" aria-expanded="true" aria-controls="collapseDataManagement">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Management</span>
        </a>
        <div id="collapseDataManagement" class="collapse" aria-labelledby="headingDataManagement" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?= base_url('data'); ?>" class="collapse-item <?= uri_string() == 'data' ? 'active' : '' ?>">Data</a>
                <a href="<?= base_url('data/new'); ?>" class="collapse-item <?= uri_string() == 'data/new' ? 'active' : '' ?>">Upload Data</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <li class="nav-item <?= uri_string() == 'user' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserManagement" aria-expanded="true" aria-controls="collapseUserManagement">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>User Management</span>
        </a>
        <div id="collapseUserManagement" class="collapse" aria-labelledby="headingDataManagement" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?= base_url('user'); ?>" class="collapse-item <?= uri_string() == 'user' ? 'active' : '' ?>">User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>