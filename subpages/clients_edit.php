<input type="hidden" id="clients_edit_open" data-bs-toggle="modal" data-bs-target="#clients_edit">

<div id="clients_edit" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CLIENTS_LABEL_EDIT; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <label for="exampleFormControlInput1" class="form-label">
                    <?php echo CLIENTS_LABEL_CLIENT_NAME; ?>
                </label>

                <input type="hidden" id="id_edit" value="">

                <input type="text" class="form-control"
                id="name_edit" name="name_edit"
                maxlength="<?php echo LIMIT_CLIENT_NAME; ?>">

                <p class="error error-name_edit text-danger">
                    Example error message
                </p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="edit_client">
                    <?php echo CLIENTS_BUTTON_EDIT; ?>
                </button>
            </div>

        </div>
    </div>
</div>