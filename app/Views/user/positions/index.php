<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="positions/new" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newModal">New Data</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($positions as $position) : ?>
                            <tr>
                                <th class="align-middle"><?= $i++; ?></th>
                                <td class="align-middle"><?= $position['name']; ?></td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $position['id']; ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $position['id']; ?>">
                                        Delete
                                    </button>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->include('user/positions/modal'); ?>
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