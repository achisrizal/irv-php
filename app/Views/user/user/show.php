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
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5><?= $users['username']; ?></h5>
                                </li>
                                <li class="list-group-item"><?= $users['email']; ?></li>
                                <li class="list-group-item"><?= $users['description']; ?></li>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto mr-auto">
                                            <a href="/user" class="btn btn-secondary">Back</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="/user/<?= $users['userid']; ?>/edit" class="btn btn-warning">Edit</a>
                                        </div>
                                    </div>
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