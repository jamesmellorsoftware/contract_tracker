<?php
$clients = Client::retrieve();
?>

<div id="contracts_add" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CONTRACTS_LABEL_ADDNEW; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="client_id" class="form-label">
                        <?php echo CONTRACTS_LABEL_CLIENT_NAME; ?>
                    </label>
                    <select class="form-select" id="client_id" name="client_id">
                        <option value="">
                            <?php echo CONTRACTS_LABEL_CLIENT_SELECT; ?>
                        </option>
                        <?php foreach ($clients as $client) { ?>
                            <option value="<?php echo $client->id; ?>">
                                <?php echo $client->id . " - " . $client->name; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <p class="error error-client_id text-danger">
                        Example error message
                    </p>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="add_contract">
                        <?php echo CONTRACTS_BUTTON_ADD; ?>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
