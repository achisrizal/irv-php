<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Map</h1> -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    Time Period
                    <form class="form-inline date">
                        <div class="form-group mb-2 mr-3">
                            <label for="tgl_awal" class="sr-only">Date</label>
                            <input type="date" class="form-control" placeholder="Date" name="tgl_awal" id="tgl_awal">
                        </div>
                        <div class="mb-2 mr-3">
                            to
                        </div>
                        <div class="form-group mb-2 mr-3">
                            <label for="tgl_akhir" class="sr-only">Date</label>
                            <input type="date" class="form-control " placeholder="Date" name="tgl_akhir" id="tgl_akhir">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Apply Date</button>
                    </form>
                </div>
                <div class="card-img" id="map" style="height: 65vmin;"></div>
                <div class="card-body">
                    <input type="range" class="custom-range" min="0" max="160" value="10" id="myRange" />
                    <div class="col">
                        Min Amplitude : <span id="amplitude"></span> m/s<sup>2</sup>
                    </div>
                    <hr />
                    <div class="border-left-danger pl-3">
                        <b>Catatan :</b> Sementara baru ada data Stasiun Yogyakarta, Payukan, dan Rewulu.
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="<?= base_url(); ?>/js/leaflet-heat.js"></script>

<!-- Data -->
<script src="<?= base_url(); ?>/js/data.js"></script>
<script src="<?= base_url(); ?>/js/stasiun.js"></script>

<!-- Custom scripts for Map-->
<script src="<?= base_url(); ?>/js/map.js"></script>

<?= $this->endSection(); ?>