<?php

class Contract extends db_objects {

    protected static $db_table = "contracts";
    protected static $db_table_fields = array("id", "client_id");

    public $id;
    public $user_id;
    public $client_id;

    public function save(){
        global $db;

        $sql = "INSERT INTO " . Client::get_table_name() . " (user_id, client_id) VALUES (?, ?)";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $this->name);
        $stmt->execute();
        
        $this->id = $db->inserted_id();

        return true;
    }

    public function verify_new() {
        // Check empty fields
        if (empty($this->client_id) || strlen($this->client_id < 1)) $this->errors['client_id'] = CONTRACTS_ERROR_NOCLIENT;

        // Check if this client belongs to the user
        // (user should not be able to add a contract to another customer that is not theirs)
        if (!User::has_client($this->client_id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        return true;
    }

    public static function retrieve() {
        global $db;
        global $session;

        $sql = "SELECT * FROM " . Contract::get_table_name() . " AS Co ";
        $sql.= "JOIN " . Client::get_table_name() . " AS Cl ";
        $sql.= "ON ";
        $sql.= "Co.client_id = Cl.id ";
        $sql.= "WHERE Cl.user_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("i", $session->user_id);
        $stmt->execute();
        $results = $stmt->get_result();

        $result_set = self::retrieve_objects_from_db($results, false);

        return $result_set;
    }

    public static function initialise_new($client) {
        $new_contract = new Client;
        $new_contract->client_id = trim($client);
        return $new_contract;
    }

} // end of class Contract

?>