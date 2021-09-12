<div id="clients_add" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    Add New Client
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <label for="exampleFormControlInput1" class="form-label">
                    Client Name
                </label>

                <input type="text" class="form-control"
                id="name" name="name" placeholder="John"
                maxlength="<?php echo LIMIT_CLIENT_NAME; ?>">

                <p class="error error-name text-danger">
                    Example error message
                </p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="add_client">
                    Add
                </button>
            </div>

        </div>
    </div>
</div>