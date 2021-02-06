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
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">
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

    <!-- Nav Item - Components -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>/components">
            <i class="fas fa-fw fa-pallet"></i>
            <span>Components</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>/map">
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
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Administrator</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">
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