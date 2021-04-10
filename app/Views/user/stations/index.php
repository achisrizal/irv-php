<?= $this->extend('user/templates/index'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div>
            <?php if (in_groups('superadmin')) : ?>
                <button type="button" class="btn btn-primary btn-sm shadow-sm" data-toggle="modal" data-target="#uploadModal">
                    Upload Data
                </button>
            <?php endif; ?>
            <a href="stations/new" class="btn btn-primary btn-sm shadow-sm">New Data</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Railway Station</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($stations as $station) : ?>
                            <tr>
                                <th class="align-middle"><?= $i++; ?></th>
                                <td class="align-middle"><?= $station['name']; ?></td>
                                <td class="align-middle"><?= $station['lat']; ?></td>
                                <td class="align-middle"><?= $station['lng']; ?></td>
                                <td class="align-middle">
                                    <a href="stations/<?= $station['id']; ?>" class="btn btn-info">Detail</a>
                                    <a href="stations/<?= $station['id']; ?>/edit" class="btn btn-warning">Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $station['id']; ?>">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->include('user/stations/modal'); ?>
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

<script>
    function label() {
        const csv = document.querySelector('#csv');
        const csvLabel = document.querySelector('.custom-file-label');

        csvLabel.textContent = csv.files[0].name;
    }
</script>

<?= $this->endSection(); ?>