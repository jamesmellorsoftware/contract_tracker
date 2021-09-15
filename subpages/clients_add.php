<div id="clients_add" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CLIENTS_LABEL_ADDNEW; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <label for="exampleFormControlInput1" class="form-label">
                    <?php echo CLIENTS_LABEL_CLIENT_NAME; ?>
                </label>

                <input type="text" class="form-control"
                id="name" name="name" placeholder="John"
                maxlength="<?php echo LIMIT_CLIENT_NAME; ?>">

                <p class="error error-name text-danger"></p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="add_client">
                    <?php echo CLIENTS_BUTTON_ADD; ?>
                </button>
            </div>

        </div>
    </div>
</div>