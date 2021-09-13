<?php

class Client extends db_objects {

    protected static $db_table = "clients";
    protected static $db_table_fields = array("id", "name");

    public $id;
    public $user_id;
    public $name;

    public function save(){
        global $db;

        $sql = "INSERT INTO " . Client::get_table_name() . " (user_id, name) VALUES (?, ?)";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("is", $this->user_id, $this->name);
        $stmt->execute();
        
        $this->id = $db->inserted_id();

        return true;
    }

    public function verify_new() {
        // Check if there is a client user ID set. If not, log the user out before the client can be created.
        if (!isset($this->user_id) || empty($this->user_id)) $this->errors['logout'] = 1;

        // Check empty fields, field lengths, and regex out anything other than alphanumerics
        if (empty($this->name) || strlen($this->name < 1)) $this->errors['name'] = CLIENTS_ERROR_NAME_EMPTY;
        if (strlen($this->name) > LIMIT_CLIENT_NAME)       $this->errors['name'] = CLIENTS_ERROR_NAME_LENGTH;
        if (!preg_match('/[a-z_\-0-9]/i', $this->name))    $this->errors['name'] = CLIENTS_ERROR_NAME_SYMBOLS;

        if (!empty($this->errors)) return false;

        return true;
    }

    public static function retrieve() {
        global $db;
        global $session;

        $sql = "SELECT * FROM " . Client::get_table_name() . " ";
        $sql.= "WHERE user_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("i", $session->user_id);
        $stmt->execute();
        $results = $stmt->get_result();
        $result_set = self::retrieve_objects_from_db($results);

        return $result_set;
    }

    public static function initialise_new($name, $user_id) {
        $new_client = new Client;
        $new_client->name = trim($name);
        $new_client->user_id = $user_id;

        return $new_client;
    }

    public static function belongs_to_active_user($client_id) {
        global $db;
        global $session;

        $sql = "SELECT COUNT(*) FROM " . Client::get_table_name() . " ";
        $sql.= "WHERE id = ? AND user_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $client_id, $session->user_id);
        $stmt->execute();
        $results = $stmt->get_result();

        return ($results->num_rows == 1) ? true : false;

    }
} // end of class Client

?>