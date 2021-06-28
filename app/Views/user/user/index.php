<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="user/new" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt"></i> New Data</a>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <?php if (in_groups('superadmin')) : ?>
                                        <th>By</th>
                                    <?php endif; ?>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <th class="align-middle"><?= $i++; ?></th>
                                        <td class="align-middle"><?= $user['username']; ?></td>
                                        <td class="align-middle"><?= $user['email']; ?></td>
                                        <td class="align-middle"><?= $user['description']; ?></td>
                                        <?php if (in_groups('superadmin')) : ?>
                                            <td class="align-middle">
                                                <?php if ($user['admin'] == "superadmin") : ?>
                                                    -
                                                <?php else : ?>
                                                    <?= $user['admin']; ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                        <td class="align-middle">
                                            <a href="user/<?= $user['userid']; ?>" class="btn btn-info">Detail</a>
                                            <a href="user/<?= $user['userid']; ?>/edit" class="btn btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $user['userid']; ?>">
                                                Delete
                                            </button>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <?php foreach ($users as $user) : ?>
        <div class="modal fade" id="deleteModal<?= $user['userid']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete <?= $user['username']; ?> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                        <form action="<?= base_url('user/' . $user['userid']); ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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