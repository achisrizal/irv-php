<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Map</h1> -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-primary btn-sm" onclick="getLoc(-7.522, 109.594)"><i class="fas fa-map-marked-alt"></i> Recenter Map</button>
    </div>


    <!-- Content Row -->
    <div class="row">
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="col-xl-12 col-lg-12">
                <div class="alert alert-success shadow mb-4" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-xl-3 col-lg-4">
            <!-- Threshold  -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Threshold
                </div>
                <div class="card-body">
                    <div class="col">
                        Min Amplitude : <span id="amplitude"></span> m/s<sup>2</sup>
                        <input type="range" class="custom-range" min="0" max="160" value="10" id="myRange" name="myRange" />
                    </div>
                </div>
            </div>

            <!-- Filter -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">

                    <div class="row align-items-center">
                        <div class="col">
                            <form action="" method="post">

                                <div class="form-row">
                                    <div class="form-group mr-3 col">
                                        <label for="start">Start Date</label>
                                        <input type="date" class="form-control" id="start" name="start" value="<?= $start ?>">
                                    </div>

                                    <div class="form-group mr-3 col">
                                        <label for="end">End Date</label>
                                        <input type="date" class="form-control" id="end" name="end" value="<?= $end ?>">
                                    </div>

                                    <div class="form-group mr-3 col">
                                        <div class="btn-group dropright">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownPositions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Positions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownPositions">
                                                <?php foreach ($positions as $position) : ?>
                                                    <span class="dropdown-item"><input class="form-check-input" type="checkbox" value="<?= $position['id']; ?>" id="select[]" name="select[]" <?= in_array($position['id'], $checked) ? 'checked' : '' ?>><?= $position['name']; ?></span>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" id="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#downloadModal">
                Data Download
            </button>
        </div>

        <div class="col-xl-9 col-lg-8">
            <!-- Map -->
            <div class="card shadow mb-4">
                <div class="card-img" id="map" style="height: 89vmin;">
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('user/map/modal'); ?>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>


<?= $this->section('CSS'); ?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

<?= $this->endSection(); ?>


<?= $this->section('JS'); ?>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- Leaflet Heat JS -->
<script src="<?= base_url('js/leaflet-heat.js'); ?>"></script>

<!-- Leaflet-knn JS -->
<script src="<?= base_url('js/leaflet-knn.min.js'); ?>"></script>

<script>
    var stations = <?= $stations; ?>;
    var geojson = <?= $geojson; ?>;
    var data = <?= $data; ?>;
</script>

<script src="<?= base_url('js/map.js'); ?>"></script>

<script>
    function printContent() {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById("print").innerHTML;

        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<?= $this->endSection(); ?>