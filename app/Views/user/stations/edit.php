<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">
                    <form action="/stations/<?= $stations['id']; ?>" method="post">
                        <input type="hidden" name="_method" value="put" />
                        <?= csrf_field(); ?>
                        <!-- <input type="hidden" name="id" id="id" value="<?= old('id', $stations['id']) ?>"> -->
                        <input type="hidden" name="slug" id="slug" value="<?= old('slug', $stations['slug']) ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= old('name', $stations['name']) ?>" style="text-transform:uppercase" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="number" class="form-control <?= ($validation->hasError('lat')) ? 'is-invalid' : ''; ?>" id="lat" name="lat" step=0.00001 value="<?= old('lat', $stations['lat']) ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('lat'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="number" class="form-control <?= ($validation->hasError('lng')) ? 'is-invalid' : ''; ?>" id="lng" name="lng" step=0.00001 value="<?= old('lng', $stations['lng']) ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('lng'); ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto mr-auto">
                                <a href="/stations" class="btn btn-secondary">Back</a>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>