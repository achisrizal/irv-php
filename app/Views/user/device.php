<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div id="content">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="503">503</div>
            <p class="lead text-gray-800 mb-5">Service Unavaible</p>
            <p class="text-gray-500 mb-0">Under Maintenance</p>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>