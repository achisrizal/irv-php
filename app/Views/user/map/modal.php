<!-- Modal New Date -->
<div class="modal fade" id="newModalDate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">New Data Date</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="createDate" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" name="date" value="<?= old('date') ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
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

<!-- Modal New Position -->
<div class="modal fade" id="newModalPosition" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">New Data Position</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/positions/create" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= old('name') ?>" style="text-transform:capitalize" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
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