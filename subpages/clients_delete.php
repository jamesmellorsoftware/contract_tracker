<input type="hidden" id="clients_delete_open" data-bs-toggle="modal" data-bs-target="#clients_delete">

<div id="clients_delete" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-danger">
                <h5 class="modal-title">
                    <?php echo CLIENTS_LABEL_DELETE; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p>
                    <?php echo CLIENTS_LABEL_CHECKDELETE; ?>
                </p>
                <p>
                    <span id="client_delete_id"></span>
                    <span id="client_delete_name"></span>
                </p>

            </div>

            <div class="modal-footer bg-danger">
                <button type="button" class="btn btn-dark" id="delete_client">
                    <?php echo CLIENTS_BUTTON_DELETE; ?>
                </button>
            </div>

        </div>
    </div>
</div>