<?php
require_once("includes/head.php");
if (!$session->is_signed_in()) header("Location: login.php");
$searchActive = (isset($_GET['search']) && $_GET['search'] == "active") ? true : false;
$clients = ($searchActive) ? Client::retrieve(true, $_GET) : Client::retrieve();
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
                        
                        <i class="bi bi-search
                        section-clients-right-controls-icon
                        <?php if ($searchActive) echo "text-success" ?>"
                        data-bs-toggle="modal" data-bs-target="#clients_search"></i>
                        
                        <a href="index.php">
                            <i class="bi bi-receipt
                            section-clients-right-controls-icon"></i>
                        </a>
                    </div>

                    <a class="btn btn-danger section-right-logout" href="logout.php">
                        <?php echo LOGOUT_BUTTON . " " . $session->username; ?>
                    </a>
                </div>

                <table class="table table-hover section-right-table section-clients-right-table">
                    <thead>
                        <th class="section-right-table-head">
                            <?php echo CLIENTS_TABLETITLE_CLIENT_ID; ?>
                        </th>
                        <th class="section-right-table-head">
                            <?php echo CLIENTS_TABLETITLE_CLIENT_NAME; ?>
                        </th>
                        <th></th>
                    </thead>

                    <tbody>
                        <?php if (empty($clients)) { ?>
                            <tr class="section-right-table-row">
                                <td class="text-center" colspan="3"><?php echo CLIENTS_NORESULTS; ?></td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($clients as $client) { ?>
                                <tr
                                    class="section-right-table-row table_row"
                                    href="<?php echo $client->id; ?>">
                                    <td>
                                        <?php echo $client->id; ?>
                                    </td>
                                    <td class="client_name">
                                        <?php echo $client->name; ?>
                                    </td>
                                    <td class="section-right-table-delete no_click">
                                        <i class="bi bi-x-circle-fill text-danger delete_client no_click"></i>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>

            </section>
        </div>

    </div>
</main>



<?php
// Modals
require_once("subpages/clients_add.php");
require_once("subpages/clients_delete.php");
require_once("subpages/clients_edit.php");
require_once("subpages/clients_search.php");
?>

<script src="js/clients.js"></script>

<?php
require_once("includes/foot.php");
?>