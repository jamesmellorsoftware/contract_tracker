<?php

require_once("../config.php");
require_once("../variables.php");

if (isset($_POST['action']) && $_POST['action'] == "add_client") {

    $new_client = Client::initialise_new($_POST['name'], $session->user_id);

    if (!$new_client->verify_new()) {
        echo json_encode($new_client->errors);
    } else {
        if ($new_client->save()) {
            echo true;
        } else {
            json_encode($new_client->errors);
        }
    }

} else {
    echo false;
}

?>