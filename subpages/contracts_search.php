<div id="contracts_search" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CONTRACTS_LABEL_CLIENT_SEARCH; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="contracts_search_id" class="form-label">
                        <?php echo CONTRACTS_TABLETITLE_CONTRACT_ID; ?>
                    </label>
                    <input type="number" class="form-control"
                    name="contracts_search_id" id="contracts_search_id"
                    value="<?php
                        if (isset($_GET['id']) && !empty($_GET['id'])) {
                            echo htmlentities($_GET['id']);
                        }
                    ?>">

                    <label for="contracts_search_client_id" class="form-label">
                        <?php echo CONTRACTS_TABLETITLE_CLIENT_ID; ?>
                    </label>
                    <input type="number" class="form-control"
                    name="contracts_search_client_id" id="contracts_search_client_id"
                    value="<?php
                        if (isset($_GET['client_id']) && !empty($_GET['client_id'])) {
                            echo htmlentities($_GET['client_id']);
                        }
                    ?>">

                    <label for="contracts_search_client_name" class="form-label">
                        <?php echo CONTRACTS_LABEL_CLIENT_NAME; ?>
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
                        <?php echo CONTRACTS_BUTTON_CLEAR_SEARCH; ?>
                    </button>
                    <button type="button" class="btn btn-dark" id="search_contract">
                        <?php echo CONTRACTS_BUTTON_SEARCH; ?>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
