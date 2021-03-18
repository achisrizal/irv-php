<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">
                    <form action="/stations/create" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= old('name') ?>" style="text-transform:uppercase" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="number" class="form-control <?= ($validation->hasError('lat')) ? 'is-invalid' : ''; ?>" id="lat" name="lat" step=0.00001 value="<?= old('lat') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('lat'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="number" class="form-control <?= ($validation->hasError('lng')) ? 'is-invalid' : ''; ?>" id="lng" name="lng" step=0.00001 value="<?= old('lng') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('lng'); ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto mr-auto">
                                <a href="/stations" class="btn btn-secondary">Back</a>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>