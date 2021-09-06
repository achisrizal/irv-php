<!-- Modal New -->
<div class="modal fade" id="newModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">New Gateway</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/gateways/create" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <input type='hidden' name='user_id' value="<?= $users['userid']; ?>" />
                    <div class="form-group">
                        <label for="name">Gateway</label>
                        <select class="form-control" id="gateway" name="gateway">
                            <?php foreach ($gatewaysList as $gtwList) : ?>
                                <option value="<?= $gtwList['id']; ?>"><?= $gtwList['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('gateway'); ?>
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
<?php foreach ($gateways as $gtw) : ?>
    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal<?= $gtw['gateway']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete data for <b><?= $gtw['gateway']; ?></b> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                    <form action="/gateway/<?= $gtw['gateway']; ?>/delete" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>