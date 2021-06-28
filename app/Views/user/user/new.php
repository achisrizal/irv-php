<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">

                    <form action="/users/create" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="form-control">
                                <?php foreach ($roles as $role) : ?>
                                    <option value="<?= $role['name']; ?>" <?= $role['name'] == old('role') ? 'selected' : ''; ?>><?= $role['description']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" value="<?= old('username') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="showPass" onclick="show()">
                                <label class="form-check-label small" for="showPass">
                                    show password
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="/user" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?= $this->endSection(); ?>