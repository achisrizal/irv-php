<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div>
            <a href="map" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-map fa-sm text-white-50"></i> Show Map</a>
            <a href="map/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Upload Data</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dates as $date) : ?>
                            <?php if ($date['total'] > 0) : ?>
                                <tr>
                                    <th class="align-middle"><?= $i++; ?></th>
                                    <td class="align-middle"><?= $date['date']; ?></td>
                                    <td class="align-middle"><?= $date['total']; ?></td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $date['datesid']; ?>">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->include('user/data/modal'); ?>
</div>

<?= $this->endSection(); ?>


<?= $this->section('CSS'); ?>

<link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?= $this->endSection(); ?>


<?= $this->section('JS'); ?>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>

<?= $this->endSection(); ?>