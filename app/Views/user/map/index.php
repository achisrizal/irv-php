<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Map</h1> -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div>
            <a href="data" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-clipboard-list fa-sm text-white-50"></i> Manage Data</a>
            <a href="map/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Upload Data</a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="row align-items-center">
                        <div class="col-6">
                            <form action="">
                                <label for="datepicker">Date</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="from" name="from" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">s/d</span>
                                    </div>

                                    <input type="date" class="form-control" id="to" name="to" style="z-index:999" autocomplete='off' />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Apply</button>
                                    </div>
                                </div>
                                <!-- <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="datepicker" id="datepicker">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Apply</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>

                        <div class="col-4">
                            Min Amplitude : <span id="amplitude"></span> m/s<sup>2</sup>
                            <input type="range" class="custom-range" min="0" max="160" value="10" id="myRange" name="myRange" />
                        </div>
                        <div class=" col">
                            <?php foreach ($positions as $position) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $position['id']; ?>" id="select" name="select" checked disabled>
                                    <label class="form-check-label" for="select">
                                        <?= $position['name']; ?>
                                    </label>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="card-img" id="map" style="height: 65vmin;"></div>

            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>


<?= $this->section('CSS'); ?>

<style>
    /* .my-class a {
        background: #FC0 !important;
    } */

    /* td.highlight>a {
        background: #E50104 !important;
        color: #fff !important;
    } */
</style>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

<?= $this->endSection(); ?>


<?= $this->section('JS'); ?>

<!-- Date Picker -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- Leaflet Heat JS -->
<script src="<?= base_url('js/leaflet-heat.js'); ?>"></script>

<script>
    // var dates = <?= $dates; ?>;

    // $(function() {
    //     var dateFormat = "dd/mm/yy",
    //         from = $("#from")
    //         .datepicker({
    //             changeMonth: true,
    //             changeYear: true,
    //             beforeShowDay: highlightDays,
    //         })
    //         .on("change", function() {
    //             to.datepicker("option", "minDate", getDate(this));
    //         }),
    //         to = $("#to").datepicker({
    //             changeMonth: true,
    //             changeYear: true,
    //             beforeShowDay: highlightDays,
    //         })
    //         .on("change", function() {
    //             from.datepicker("option", "maxDate", getDate(this));
    //         });

    //     function getDate(element) {
    //         var date;
    //         try {
    //             date = $.datepicker.parseDate(dateFormat, element.value);
    //         } catch (error) {
    //             date = null;
    //         }

    //         return date;
    //     }
    // });

    // function highlightDays(date) {
    //     for (var i = 0; i < dates.length; i++) {
    //         if (new Date(dates[i].date).toString() == date.toString()) {
    //             return [true, 'highlight'];
    //         }
    //     }
    //     return [true, ''];

    // }
    // $(function() {

    //     $('input[name="datefilter"]').daterangepicker({
    //         autoUpdateInput: false,

    //         locale: {
    //             cancelLabel: 'Clear'
    //         }
    //     });

    //     $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
    //         $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    //     });

    //     $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
    //         $(this).val('');
    //     });

    // });

    var stations = <?= $stations; ?>;
    var data = <?= $data; ?>;
</script>

<script src="<?= base_url('js/map.js'); ?>"></script>

<?= $this->endSection(); ?>