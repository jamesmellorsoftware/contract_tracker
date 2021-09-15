<div id="clients_search" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo CLIENTS_LABEL_CLIENT_SEARCH; ?>
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="exampleFormControlInput1" class="form-label">
                        <?php echo CLIENTS_TABLETITLE_CLIENT_ID; ?>
                    </label>
                    <input type="number" class="form-control"
                    name="clients_search_id" id="clients_search_id"
                    value="<?php
                        if (isset($_GET['id']) && !empty($_GET['id'])) {
                            echo htmlentities($_GET['id']);
                        }
                    ?>">

                    <label for="exampleFormControlInput1" class="form-label">
                        <?php echo CLIENTS_LABEL_CLIENT_NAME; ?>
                    </label>
                    <input type="text" class="form-control"
                    name="clients_search_name" id="clients_search_name"
                    value="<?php
                        if (isset($_GET['name']) && !empty($_GET['name'])) {
                            echo htmlentities($_GET['name']);
                        }
                    ?>">
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="clear_search">
                        <?php echo CLIENTS_BUTTON_CLEAR_SEARCH; ?>
                    </button>
                    <button type="button" class="btn btn-dark" id="search_client">
                        <?php echo CLIENTS_BUTTON_SEARCH; ?>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>