<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">

                    <form class="user" action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email Address" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" placeholder="Password" autocomplete="off">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" onclick="show()">
                                    <label class="form-check-label small" for="defaultCheck1">
                                        show password
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="Repeat Password" autocomplete="off">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('JS'); ?>
<script>
    function show() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?= $this->endSection(); ?>