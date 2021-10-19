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
                                        <th>Battery</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gateways as $gtw) : ?>
                                        <tr>
                                            <td>
                                                <a href="/measurement/<?= $gtw['id']; ?>">
                                                    <?= $gtw['id']; ?>
                                                </a>
                                            </td>
                                            <td><?= $gtw['name']; ?></td>
                                            <td><?= $gtw['battery']; ?>%</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nodes  -->
        <div class="col-xl-4 col-lg-4 px-1">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="col">
                        <h4 class="text-center"><?= $gateway['name']; ?></h4>

                        <div class="d-flex justify-content-center">
                            <div class="p-2 text-center align-self-end">
                                <span class="text-xl"><?= $gateway['battery']; ?>%</span>
                                <br>
                                <span class="text-sm text-gray-500">Battery</span>
                            </div>

                            <div class="p-2 text-center align-self-end">
                                <span class="text-xl"><?= round($gateway['temperature'], 2); ?>&degC</span>
                                <br>
                                <span class="text-sm text-gray-500">Temperature</span>
                            </div>

                            <div class="p-2 text-center align-self-end">
                                <span class="text-xl"><?= round($gateway['speed'], 1); ?> km/h</span>
                                <br>
                                <span class="text-sm text-gray-500">Speed</span>
                            </div>
                        </div>
                        <form action="" method="post">
                            <?php if ($status == "stop") : ?>
                                <input type='hidden' name='status' value="start" />
                                <div class="d-flex justify-content-center">
                                    <button type="submit" id="refreshing" class="btn btn-light"><i class="fas fa-play text-gray-500"></i> Start Refreshing</button>
                                </div>
                            <?php else : ?>
                                <input type='hidden' name='status' value="stop" />
                                <div class="d-flex justify-content-center">
                                    <button type="submit" id="refreshing" class="btn btn-light"><i class="fas fa-stop text-gray-500"></i> Stop Refreshing</button>
                                </div>
                            <?php endif; ?>
                        </form>
                        <br>
                        <div class="d-flex justify-content-center" id="nodeList">
                            <?php foreach ($gateway['nodes'] as $node) : ?>
                                <button id="nodeId<?= $node['key']; ?>" name="nodeId" value="<?= $node['id']; ?>" class="btn btn-light btn-sm mb-4 mr-1" onclick="nodeId<?= $node['key']; ?>()"><i class="fas fa-microchip text-gray-500 "></i><?= $node['key']; ?></button>
                            <?php endforeach; ?>
                        </div>

                        <div class="d-flex justify-content-center shadow mb-4">
                            <img src="<?= base_url(); ?>/img/picture.svg" alt="">
                        </div>

                        <div class="row mb-4">
                            <button class="btn btn-success btn-block" id="findNode" onclick="findNode()" disabled><i class="fas fa-search"></i> Find Node</button>
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
                                <input type="range" class="custom-range" min="0" max="160" step="0.1" value=<?= $node['threshold']; ?> id="myRange" name="myRange" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div class="col-xl-8 col-lg-8">
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

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollY": "100px",
            "scrollCollapse": true,
            "paging": false
        });
    });

    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- Leaflet Heat JS -->
<script src="<?= base_url('js/leaflet-heat.js'); ?>"></script>

<!-- Leaflet-knn JS -->
<script src="<?= base_url('js/leaflet-knn.min.js'); ?>"></script>

<script>
    var data = <?= $data; ?>;

    var gatewayId, nodeId, token;

    var lat = <?= $gateway['location']['latitude']; ?>;
    var lng = <?= $gateway['location']['longitude']; ?>;

    gatewayId = "<?= $gateway['id']; ?>";
    token = "<?= $token; ?>";

    // Add active class to the current button (highlight it)
    var header = document.getElementById("nodeList");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
            document.getElementById('findNode').disabled = false;
            document.getElementById('myRange').disabled = false;
        });
    }

    <?php foreach ($gateway['nodes'] as $node) : ?>

        function nodeId<?= $node['key']; ?>() {
            nodeId = document.getElementById("nodeId<?= $node['key']; ?>").value;
            console.log(nodeId);
        };
    <?php endforeach; ?>
</script>

<script src="<?= base_url('js/map2.js'); ?>"></script>

<?= $this->endSection(); ?>