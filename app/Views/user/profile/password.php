<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="/profile/changePassword" method="post">
                        <?= csrf_field(); ?>
                        <input type='hidden' name='user_id' value="<?= user_id(); ?>" />
                        <input type='hidden' name='user_pass' value="<?= user()->password_hash; ?>" />
                        <div class="form-group">
                            <label for="pass_old">Old Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('pass_old')) ? 'is-invalid' : ''; ?>" name="pass_old" id="pass_old" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= $validation->getError('pass_old'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass_new">New Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('pass_new')) ? 'is-invalid' : ''; ?>" name="pass_new" id="pass_new" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= $validation->getError('pass_new'); ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="showPass" onclick="show()">
                                <label class="form-check-label small" for="showPass">
                                    show password
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass_confirm">Repeat Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('pass_confirm')) ? 'is-invalid' : ''; ?>" name="pass_confirm" id="pass_confirm" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= $validation->getError('pass_confirm'); ?>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="/profile" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
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
        var x = document.getElementById("pass_new");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?= $this->endSection(); ?>