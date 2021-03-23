<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 col-6">
                <div class="card-body">
                    <form action="/map/create" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!-- <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" name="date" value="<?= old('date') ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('date'); ?>
                            </div>
                        </div> -->
                        <input type='hidden' name='user_id' value="<?= user()->id; ?>" />
                        <div class="form-group">
                            <label for="date">Date</label>
                            <div class="input-group">
                                <select class="custom-select <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" name="date" value="<?= old('date') ?>">
                                    <option selected disabled></option>
                                    <?php foreach ($dates as $date) : ?>
                                        <option value="<?= $date['id']; ?>" <?= ($date['id'] == old('date')) ? 'selected' : ''; ?>><?= $date['date']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append">
                                    <a href="positions/new" class="btn input-group-text" data-toggle="modal" data-target="#newModalDate"><b>+</b></a>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('date'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <div class="input-group">
                                <select class="custom-select <?= ($validation->hasError('position')) ? 'is-invalid' : ''; ?>" id="position" name="position" value="<?= old('position') ?>">
                                    <option selected disabled></option>
                                    <?php foreach ($positions as $position) : ?>
                                        <option value="<?= $position['id']; ?>" <?= ($position['id'] == old('position')) ? 'selected' : ''; ?>><?= $position['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append">
                                    <a href="positions/new" class="btn input-group-text" data-toggle="modal" data-target="#newModalPosition"><b>+</b></a>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('position'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="csv">Select File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('csv')) ? 'is-invalid' : ''; ?>" id="csv" name="csv" onchange="label()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('csv'); ?>
                                </div>
                                <label class="custom-file-label" for="csv"></label>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto mr-auto">
                                <a href="/map" class="btn btn-secondary">Back</a>
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

    <?= $this->include('user/map/modal'); ?>
</div>
<?= $this->endSection(); ?>

<?= $this->section('JS'); ?>
<script>
    function label() {
        const csv = document.querySelector('#csv');
        const csvLabel = document.querySelector('.custom-file-label');

        csvLabel.textContent = csv.files[0].name;
    }
</script>
<?= $this->endSection(); ?>