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

                    <label for="contracts_search_id" class="form-label">
                        Contract ID
                    </label>
                    <input type="number" class="form-control"
                    name="contracts_search_id" id="contracts_search_id"
                    value="<?php
                        if (isset($_GET['id']) && !empty($_GET['id'])) {
                            echo htmlentities($_GET['id']);
                        }
                    ?>">

                    <label for="contracts_search_client_id" class="form-label">
                        Client ID
                    </label>
                    <input type="number" class="form-control"
                    name="contracts_search_client_id" id="contracts_search_client_id"
                    value="<?php
                        if (isset($_GET['client_id']) && !empty($_GET['client_id'])) {
                            echo htmlentities($_GET['client_id']);
                        }
                    ?>">

                    <label for="contracts_search_client_name" class="form-label">
                        Client Name
                    </label>
                    <input type="text" class="form-control"
                    name="contracts_search_client_name" id="contracts_search_client_name"
                    value="<?php
                        if (isset($_GET['client_name']) && !empty($_GET['client_name'])) {
                            echo htmlentities($_GET['client_name']);
                        }
                    ?>">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="clear_search">
                        Clear
                    </button>
                    <button type="button" class="btn btn-dark" id="search_contract">
                        Search
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
