<?php
require_once("includes/head.php");
if (!$session->is_signed_in()) header("Location: login.php");
$searchActive = (isset($_GET['search']) && $_GET['search'] == "active") ? true : false;
$contracts = Contract::retrieve();
$contracts = ($searchActive) ? Contract::retrieve(true, $_GET) : Contract::retrieve();
?>

<main class="section section-mainapp">

    <div class="row section-row section-mainapp-row">

        <div class="col-md-3">
            <section class="section-left section-mainapp-left">
                <?php require_once("subpages/left_logo.php"); ?>
            </section>
        </div>
    
        <div class="col-md-9 section-right-container section-mainapp-right-container">
            <section class="section-right section-mainapp-right">

                <div class="row text-center section-right-controls section-mainapp-right-controls">

                    <div class="col-xs-12 section-right-controls-icons text-center">
                        <i class="bi bi-plus section-mainapp-right-controls-icon"
                        data-bs-toggle="modal" data-bs-target="#contracts_add"></i>
                        
                        <i class="bi bi-search section-mainapp-right-controls-icon
                        <?php if ($searchActive) echo "text-success" ?>"
                        data-bs-toggle="modal" data-bs-target="#contracts_search"></i>

                        <a href="clients.php">
                            <i class="bi bi-person-fill section-mainapp-right-controls-icon"></i>
                        </a>
                    </div>
                    
                    <a class="btn btn-danger section-right-logout" href="logout.php">
                        <?php echo LOGOUT_BUTTON . " " . $session->username; ?>
                    </a>

                </div>

                <table class="table table-hover section-right-table section-mainapp-right-table">
                    <thead>
                        <th class="section-right-table-head">
                            <?php echo CONTRACTS_TABLETITLE_CONTRACT_ID; ?>
                        </th>
                        <th class="section-right-table-head">
                            <?php echo CONTRACTS_TABLETITLE_CLIENT_ID; ?>
                        </th>
                        <th class="section-right-table-head">
                            <?php echo CONTRACTS_TABLETITLE_CLIENT_NAME; ?>
                        </th>
                        <th class="section-right-table-delete"></th>
                    </thead>

                    <tbody>
                        <?php if (empty($contracts)) { ?>
                            <tr class="section-right-table-row">
                                <td class="text-center" colspan="4"><?php echo CONTRACTS_NORESULTS; ?></td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($contracts as $contract) { ?>
                                <tr
                                    class="section-right-table-row table_row"
                                    href="<?php echo $contract->contract_id; ?>"
                                    href2="<?php echo $contract->client_id ?>">
                                    <td class="contract_id">
                                        <?php echo $contract->contract_id; ?>
                                    </td>
                                    <td class="contract_client_id">
                                        <?php echo $contract->client_id; ?>
                                    </td>
                                    <td class="contract_client_name">
                                        <?php echo $contract->name; ?>
                                    </td>
                                    <td class="section-right-table-delete no_click">
                                        <i class="bi bi-x-circle-fill text-danger delete_contract no_click"></i>
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
require_once("subpages/contracts_add.php");
require_once("subpages/contracts_delete.php");
require_once("subpages/contracts_edit.php");
require_once("subpages/contracts_search.php");
?>

<script src="js/contracts.js"></script>

<?php
require_once("includes/foot.php");
?>