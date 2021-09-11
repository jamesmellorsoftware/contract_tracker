<?php
require_once("includes/head.php");
// if (!$session->is_signed_in()) header("Location: login.php");
?>

<main class="section section-clients">

    <div class="row section-row section-clients-row">

        <div class="col-md-3">
            <section class="section-left section-clients-left">
                <?php require_once("subpages/left_logo.php"); ?>
            </section>
        </div>
    
        <div class="col-md-9 section-clients-right-container">
            <section class="section-right section-clients-right">

                <div class="row text-center section-clients-right-controls">
                    <div class="col-md-12 text-center">
                        <i class="bi bi-plus section-clients-right-controls-icon"
                        data-bs-toggle="modal" data-bs-target="#contract"></i>
                        
                        <i class="bi bi-search section-clients-right-controls-icon"></i>
                        
                        <a href="index.php">
                            <i class="bi bi-receipt section-clients-right-controls-icon"></i>
                        </a>
                    </div>

                    <a class="btn btn-danger section-right-logout">
                        <?php echo LOGOUT_BUTTON; ?>
                    </a>
                </div>

                <table class="table table-hover section-clients-right-table">
                    <thead>
                        <th>Client ID</th>
                        <th>Client name</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Smith</td>
                            <td>
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </section>
        </div>

    </div>
</main>

<?php
require_once("subpages/add_client.php");
require_once("includes/foot.php");
?>