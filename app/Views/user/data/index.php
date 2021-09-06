<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datesMeasurement as $dateMeasurement) : ?>
                            <?php if ($dateMeasurement['total'] > 0) : ?>
                                <tr>
                                    <th class="align-middle"><?= $i++; ?></th>
                                    <td class="align-middle"><?= $dateMeasurement['date']; ?></td>
                                    <td class="align-middle"><?= $dateMeasurement['type']; ?></td>
                                    <td class="align-middle"><?= $dateMeasurement['total']; ?></td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $dateMeasurement['datesid']; ?>">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach ($datesAnalysis as $dateAnalysis) : ?>
                            <?php if ($dateAnalysis['total'] > 0) : ?>
                                <tr>
                                    <th class="align-middle"><?= $i++; ?></th>
                                    <td class="align-middle"><?= $dateAnalysis['date']; ?></td>
                                    <td class="align-middle"><?= $dateAnalysis['type']; ?></td>
                                    <td class="align-middle"><?= $dateAnalysis['total']; ?></td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $dateAnalysis['datesid']; ?>">
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