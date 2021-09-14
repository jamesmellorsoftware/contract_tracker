<div id="clients_search" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    Search Clients
                </h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="modal-body">

                    <label for="exampleFormControlInput1" class="form-label">
                        Client ID
                    </label>
                    <input type="number" class="form-control"
                    name="clients_search_id" id="clients_search_id"
                    value="<?php
                        if (isset($_GET['id']) && !empty($_GET['id'])) {
                            echo htmlentities($_GET['id']);
                        }
                    ?>">

                    <label for="exampleFormControlInput1" class="form-label">
                        Client Name
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
                        Clear
                    </button>
                    <button type="button" class="btn btn-dark" id="search_client">
                        Search
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>