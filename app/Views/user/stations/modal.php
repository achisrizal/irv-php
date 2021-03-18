<?php foreach ($stations as $station) : ?>
    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal<?= $station['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete <b><?= $station['name']; ?></b> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                    <form action="/stations/<?= $station['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal New -->
<div class="modal fade" id="uploadModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/stations/upload" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <?= csrf_field(); ?>

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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>