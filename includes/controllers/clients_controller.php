<?php

require_once("../config.php");
require_once("../variables.php");

// Add new client
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

// Delete client
if (isset($_POST['action']) && $_POST['action'] == "delete_client") {

    $existing_client = Client::initialise_existing($_POST['id'], "", $session->user_id);

    if (!$existing_client->verify_delete()) {
        echo json_encode($existing_client->errors);
    } else {
        if ($existing_client->delete()) {
            echo true;
        } else {
            json_encode($new_client->errors);
        }
    }

} else {
    echo false;
}

// Edit client
if (isset($_POST['action']) && $_POST['action'] == "edit_client") {

    $existing_client = Client::initialise_existing($_POST['id'], $_POST['name'], $session->user_id);

    if (!$existing_client->verify_existing()) {
        echo json_encode($existing_client->errors);
    } else {
        if ($existing_client->save()) {
            echo true;
        } else {
            json_encode($new_client->errors);
        }
    }

} else {
    echo false;
}

?>