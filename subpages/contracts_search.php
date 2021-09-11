<div id="contracts_search" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    Search Contracts
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="contract_id" class="form-label">
                        Contract ID
                    </label>
                    <input type="number" class="form-control" name="contract_id">
                    <p class="error text-danger">
                        Example error message
                    </p>

                    <label for="client_id" class="form-label">
                        Client ID
                    </label>
                    <input type="number" class="form-control" name="client_id">
                    <p class="error text-danger">
                        Example error message
                    </p>

                    <label for="client_name" class="form-label">
                        Client Name
                    </label>
                    <input type="text" class="form-control" name="client_name">
                    <p class="error text-danger">
                        Example error message
                    </p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">
                        Search
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
