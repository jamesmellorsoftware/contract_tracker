<?php
require_once("includes/head.php");
if (!$session->is_signed_in()) header("Location: login.php");
$clients = Client::retrieve();
?>

<main class="section section-clients">

    <div class="row section-row section-clients-row">

        <div class="col-md-3">
            <section class="section-left section-clients-left">
                <?php require_once("subpages/left_logo.php"); ?>
            </section>
        </div>
    
        <div class="col-md-9 section-right-container section-clients-right-container">
            <section class="section-right section-clients-right">

                <div class="row text-center section-right-controls section-clients-right-controls">
                    <div class="col-md-12 section-right-controls-icons text-center">
                        <i class="bi bi-plus section-clients-right-controls-icon"
                        data-bs-toggle="modal" data-bs-target="#clients_add"></i>
                        
                        <i class="bi bi-search section-clients-right-controls-icon"
                        data-bs-toggle="modal" data-bs-target="#clients_search"></i>
                        
                        <a href="index.php">
                            <i class="bi bi-receipt section-clients-right-controls-icon"></i>
                        </a>
                    </div>

                    <a class="btn btn-danger section-right-logout" href="logout.php">
                        <?php echo LOGOUT_BUTTON . " " . $session->username; ?>
                    </a>
                </div>

                <table class="table table-hover section-right-table section-clients-right-table">
                    <thead>
                        <th class="section-right-table-head">
                            Client ID
                        </th>
                        <th class="section-right-table-head">
                            Client name
                        </th>
                        <th></th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($clients as $client) { ?>
                            <tr class="section-right-table-row">
                                <td>
                                    <?php echo $client->id; ?>
                                </td>
                                <td>
                                    <?php echo $client->name; ?>
                                </td>
                                <td class="section-right-table-delete">
                                    <i class="bi bi-x-circle-fill text-danger"></i>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </section>
        </div>

    </div>
</main>

<?php
require_once("subpages/clients_add.php");
require_once("subpages/clients_search.php");
require_once("includes/foot.php");
?>