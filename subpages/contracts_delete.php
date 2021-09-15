<input type="hidden" id="contracts_delete_open" data-bs-toggle="modal" data-bs-target="#contracts_delete">

<div id="contracts_delete" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-danger">
                <h5 class="modal-title">
                    <?php echo CONTRACTS_LABEL_DELETE; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p>
                    <?php echo CONTRACTS_LABEL_CHECKDELETE; ?>
                </p>
                <p>
                    <?php echo CONTRACTS_LABEL_CONTRACT; ?>
                    <span id="contract_delete_id"></span>
                    (<?php echo CONTRACTS_LABEL_CLIENT_NAME; ?> <span id="contract_delete_client_id"></span> -
                    <span id="contract_delete_client_name"></span>)
                </p>

            </div>

            <div class="modal-footer bg-danger">
                <button type="button" class="btn btn-dark" id="delete_contract">
                    <?php echo CONTRACTS_BUTTON_DELETE; ?>
                </button>
            </div>

        </div>
    </div>
</div>