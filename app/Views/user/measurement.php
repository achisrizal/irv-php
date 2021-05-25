<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>


    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="overflow-auto">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="table" id="example" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Battery</th>
                                        <th>Sensor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>6070238fb5ff2e3465bea763</td>
                                        <td>Gateway 1</td>
                                        <td><i class="fas fa-circle mr-2 text-success"></i>Online</td>
                                        <td>50%</td>
                                        <td>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4001</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4002</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4003</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4004</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6070238fb5ff2e3465bea763</td>
                                        <td>Gateway 2</td>
                                        <td><i class="fas fa-circle mr-2 text-success"></i>Online</td>
                                        <td>50%</td>
                                        <td>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4005</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4006</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4007</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4008</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4">
            <!-- Threshold  -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="col">
                        <h4 class="text-center">Gateway 1</h4>

                        <div class="d-flex justify-content-center">
                            <div class="mr-4 p-3 text-center align-self-end">
                                <span class="text-xl">50%</span>
                                <br>
                                <span class="text-sm text-gray-500">Battery</span>
                            </div>

                            <div class="p-3 text-center align-self-end">
                                <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-w-20 fa-3x">
                                    <g class="fa-group">
                                        <path fill="currentColor" opacity="1" d="M104 400v96a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16v-96a16 16 0 0 1 16-16h48a16 16 0 0 1 16 16z"></path>
                                        <path fill="currentColor" opacity="1" d="M 216 288 L 168 288 C 159.1634440027073 288 152 295.1634440027073 152 304 L 152 496 C 152 504.8365559972927 159.1634440027073 512 168 512 L 216 512 C 224.8365559972927 512 232 504.8365559972927 232 496 L 232 304 C 232 295.1634440027073 224.8365559972927 288 216 288 Z"></path>
                                        <path fill="currentColor" opacity="1" d="M 344 192 L 296 192 C 287.1634440027073 192 280 199.1634440027073 280 208 L 280 496 C 280 504.8365559972927 287.1634440027073 512 296 512 L 344 512 C 352.8365559972927 512 360 504.8365559972927 360 496 L 360 208 C 360 199.1634440027073 352.8365559972927 192 344 192 Z"></path>
                                        <path fill="currentColor" opacity="0.5" d="M 472 96 L 424 96 C 415.1634440027073 96 408 103.16344400270731 408 112 L 408 496 C 408 504.8365559972927 415.1634440027073 512 424 512 L 472 512 C 480.8365559972927 512 488 504.8365559972927 488 496 L 488 112 C 488 103.16344400270731 480.8365559972927 96 472 96 Z"></path>
                                        <path fill="currentColor" opacity="0.5" d="M 600 0 L 552 0 C 543.1634440027073 1.6232490026356266e-15 536 7.1634440027073065 536 16 L 536 496 C 536 504.8365559972927 543.1634440027073 512 552 512 L 600 512 C 608.8365559972927 512 616 504.8365559972927 616 496 L 616 16 C 616 7.163444002707308 608.8365559972927 5.410830008785422e-16 600 0 Z"></path>
                                    </g>
                                </svg>
                                <span class="text-sm text-gray-500">Signal</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">

                            <button class="btn btn-light"><i class="fas fa-upload text-gray-500"></i> Backup Data</button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-light btn-sm mb-4 active"><i class="fas fa-microchip text-gray-500"></i> 4001</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4002</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4003</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4004</button>
                        </div>

                        <div class="d-flex justify-content-center shadow mb-4">
                            <img src="<?= base_url(); ?>/img/picture.svg" alt="">
                        </div>

                        <div class="row mb-4">
                            <button class="btn btn-success btn-block"><i class="fas fa-search"></i> Find Node</button>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-car-battery mr-2"></i>
                            </div>
                            <div class="col-8">
                            </div>
                            <div class="col-2">
                                %
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                Min Amplitude : <span id="amplitude"></span> m/s<sup>2</sup>
                                <input type="range" class="custom-range" min="0" max="160" value="10" id="myRange" name="myRange" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-8">
            <!-- Map -->
            <div class="card shadow mb-4">
                <div class="card-img" id="map" style="height: 125vmin;"></div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>


<?= $this->section('CSS'); ?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

<link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?= $this->endSection(); ?>


<?= $this->section('JS'); ?>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>

<!-- Leaflet JS -->
<script src=" https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="">
</script>

<script src="<?= base_url('js/map2.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollY": "100px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>

<?= $this->endSection(); ?>