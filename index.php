<?php
require_once("includes/head.php");
// if (!$session->is_signed_in()) header("Location: login.php");
?>

<main class="section section-mainapp">

    <div class="row section-row section-mainapp-row">

        <div class="col-md-3">
            <section class="section-left section-mainapp-left">
                <?php require_once("subpages/left_logo.php"); ?>
            </section>
        </div>
    
        <div class="col-md-9 section-mainapp-right-container">
            <section class="section-right section-mainapp-right">

                <div class="row text-center section-mainapp-right-controls">

                    <div class="col-md-12 text-center">
                        <i class="bi bi-plus section-mainapp-right-controls-icon"
                        data-bs-toggle="modal" data-bs-target="#contract"></i>
                        
                        <i class="bi bi-search section-mainapp-right-controls-icon"></i>

                        <a href="clients.php">
                            <i class="bi bi-person-fill section-mainapp-right-controls-icon"></i>
                        </a>
                    </div>
                    
                    <i class="bi bi-x-circle-fill text-danger section-right-logout"></i>

                </div>

                <table class="table table-hover section-mainapp-right-table">
                    <thead>
                        <th>Contract ID</th>
                        <th>Client ID</th>
                        <th>Client name</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>John Smith</td>
                        </tr>
                    </tbody>
                </table>

            </section>
        </div>

    </div>
</main>

<?php
require_once("subpages/add_contract.php");
require_once("includes/foot.php");
?>