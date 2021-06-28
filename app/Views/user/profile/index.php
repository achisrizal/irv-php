<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-5">
            <div class="card mb-3 shadow" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex justify-content-center align-self-center">
                        <i class="fas fa-user-circle text-gray-400 fa-8x"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <?php if (session()->getFlashdata('message')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('message'); ?>
                                </div>
                            <?php endif; ?>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5><?= user()->username; ?></h5>
                                </li>
                                <li class="list-group-item"><?= user()->email; ?></li>
                                <li class="list-group-item">
                                    <a href="profile/password" class="btn btn-warning">Change Password</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>