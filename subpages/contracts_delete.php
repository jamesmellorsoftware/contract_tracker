<input type="hidden" id="contracts_delete_open" data-bs-toggle="modal" data-bs-target="#contracts_delete">

<div id="contracts_delete" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    Delete Contract
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p>
                    Are you sure you want to delete the following contract?
                </p>
                <p>
                    Contract
                    <span id="contract_delete_id"></span>
                    (Client <span id="contract_delete_client_id"></span> -
                    <span id="contract_delete_client_name"></span>)
                </p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="delete_contract">
                    Yes, Confirm Delete
                </button>
            </div>

        </div>
    </div>
</div>