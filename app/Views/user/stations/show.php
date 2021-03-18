<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card">
                    <div class="card-header">
                        <?= $stations['name']; ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>Latitude</th>
                                    <td><?= $stations['lat']; ?></td>
                                </tr>
                                <tr>
                                    <th>Longitude</th>
                                    <td><?= $stations['lng']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><a href="/stations">Back</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>