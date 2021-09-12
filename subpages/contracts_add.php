<?php
$clients = Client::retrieve();
?>

<div id="contracts_add" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    Add New Contract
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="contract_client" class="form-label">
                        Client
                    </label>
                    <select class="form-select" id="contract_client" name="contract_client">
                        <option value="">
                            Select a client
                        </option>
                        <?php foreach ($clients as $client) { ?>
                            <option value="<?php echo $client->id; ?>">
                                <?php echo $client->id . " - " . $client->name; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <p class="error error-contract_client text-danger">
                        Example error message
                    </p>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="add_contract">
                        Add Contract
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
