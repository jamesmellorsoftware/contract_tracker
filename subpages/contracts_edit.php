<input type="hidden" id="contracts_edit_open" data-bs-toggle="modal" data-bs-target="#contracts_edit">

<div id="contracts_edit" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CONTRACTS_LABEL_EDIT; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <input type="hidden" id="contract_id_edit" value="">

                <label for="client_id" class="form-label">
                    <?php echo CONTRACTS_LABEL_CONTRACT_OWNER; ?>
                </label>
                <select class="form-select" id="client_id_edit" name="client_id_edit">
                    <option value="">
                        <?php echo CONTRACTS_LABEL_CLIENT_SELECT; ?>
                    </option>
                    <?php foreach ($clients as $client) { ?>
                        <option value="<?php echo $client->id; ?>">
                            <?php echo $client->id . " - " . $client->name; ?>
                        </option>
                    <?php } ?>
                </select>
                <p class="error error-client_id_edit text-danger"></p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="edit_contract">
                    <?php echo CONTRACTS_BUTTON_EDIT; ?>
                </button>
            </div>

        </div>
    </div>
</div>