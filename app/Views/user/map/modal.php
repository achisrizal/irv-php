<!-- Modal Download -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Data Table</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="print">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Amplitude</th>
                                <th>Stasiun Terdekat</th>
                            </tr>
                        </thead>
                        <tbody id="downloadTable">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary" onclick="printContent('print')">Print</button> -->
                <a href="" type="button" class="btn btn-primary" onclick="printContent('print')">Print</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Upload Data -->
<div class="modal fade" id="uploadDataModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="uploadDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadDataModalLabel">New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/map/create" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <input type='hidden' name='user_id' value="<?= user()->id; ?>" />
                    <label for="csv">Select File</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('csv')) ? 'is-invalid' : ''; ?>" id="csv" name="csv" onchange="label()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('csv'); ?>
                        </div>
                        <label class="custom-file-label" for="csv"></label>
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