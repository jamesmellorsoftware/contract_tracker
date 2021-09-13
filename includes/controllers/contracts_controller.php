<?php

require_once("../config.php");
require_once("../variables.php");

if (isset($_POST['action']) && $_POST['action'] == "add_contract") {

    $new_contract = Contract::initialise_new($_POST['client_id']);

    if (!$new_contract->verify_new()) {
        echo json_encode($new_contract->errors);
    } else {
        if ($new_contract->save()) {
            echo true;
        } else {
            json_encode($new_contract->errors);
        }
    }

} else {
    echo false;
}

?>