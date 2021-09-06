<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card mb-3 shadow">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex justify-content-center align-self-center">
                        <i class="fas fa-user-circle text-gray-400 fa-8x"></i>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5><?= $users['username']; ?></h5>
                                </li>
                                <li class="list-group-item"><?= $users['email']; ?></li>
                                <li class="list-group-item"><?= $users['description']; ?></li>
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <a href="/user" class="btn btn-secondary">Back</a>
                                        <a href="/user/<?= $users['userid']; ?>/edit" class="btn btn-warning">Edit User</a>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#newModal">New Gateway</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
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
                                    <th>Gateway</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($gateways as $gtw) : ?>
                                    <tr>
                                        <th class="align-middle"><?= $i++; ?></th>
                                        <td class="align-middle"><?= $gtw['gateway']; ?></td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $gtw['gateway']; ?>">
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
        </div>
    </div>
</div>

<?= $this->include('user/user/modal'); ?>
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