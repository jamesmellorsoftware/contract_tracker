<?php

require_once("../config.php");
require_once("../variables.php");

// Add contract
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

// Edit contract
if (isset($_POST['action']) && $_POST['action'] == "edit_contract") {

    $existing_contract = Contract::initialise_existing($_POST['client_id'], $_POST['contract_id']);

    if (!$existing_contract->verify_existing()) {
        echo json_encode($existing_contract->errors);
    } else {
        if ($existing_contract->save()) {
            echo true;
        } else {
            json_encode($existing_contract->errors);
        }
    }

} else {
    echo false;
}

?>