<?php

class Contract extends db_objects {

    protected static $db_table = "contracts";
    protected static $db_table_fields = array("id", "client_id");

    public $id;
    public $client_id;

    public function save(){
        if (isset($this->id) && !empty($this->id)) {
            return $this->update();
        }

        global $db;

        $sql = "INSERT INTO " . Contract::get_table_name() . " (client_id) VALUES (?)";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("i", $this->client_id);
        $stmt->execute();
        
        $this->id = $db->inserted_id();

        return true;
    }

    public function update() {
        global $db;

        $sql = "UPDATE " . self::get_table_name() . " ";
        $sql.= "SET client_id = ? ";
        $sql.= "WHERE id = ? ";
        $sql.= "LIMIT 1 ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $this->client_id, $this->id);
        $stmt->execute();

        return true;
    }

    public function delete() {
        global $db;

        $sql = "DELETE FROM " . self::get_table_name() . " ";
        $sql.= "WHERE id = ? AND client_id = ? ";
        $sql.= "LIMIT 1 ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $this->id, $this->client_id);
        $stmt->execute();

        return true;
    }

    public function belongs_to_client($client_id) {
        global $db;

        $sql = "SELECT COUNT(*) FROM " . self::get_table_name() . " ";
        $sql.= "WHERE id = ? AND client_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $this->id, $client_id);
        $stmt->execute();
        $results = $stmt->get_result();

        return ($results->num_rows == 1) ? true : false;
    }

    public function verify_delete() {

        // Check empty fields
        if (empty($this->client_id) || strlen($this->client_id < 1)) $this->errors['logout'] = 1;
        if (empty($this->id) || strlen($this->id < 1))               $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        // Check contract exists and belongs to client
        // Check client belongs to user
        if (!$this->belongs_to_client($this->client_id))       $this->errors['logout'] = 1;
        if (!Client::belongs_to_active_user($this->client_id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        return true;
    }

    public function verify_existing() {
        // Check empty fields
        if (empty($this->client_id) || strlen($this->client_id < 1)) $this->errors['client_id'] = CONTRACTS_ERROR_NOCLIENT;

        if (!empty($this->errors)) return false;

        // Check if this client belongs to the user
        // (user should not be able to add a contract to another customer that is not theirs)
        if (empty($this->id) || strlen($this->id) < 1)         $this->errors['logout'] = 1;
        if (!Client::belongs_to_active_user($this->client_id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        return true;
    }

    public function verify_new() {
        // Check empty fields
        if (empty($this->client_id) || strlen($this->client_id < 1)) $this->errors['client_id'] = CONTRACTS_ERROR_NOCLIENT;

        if (!empty($this->errors)) return false;

        // Check if this client belongs to the user
        // (user should not be able to add a contract to another customer that is not theirs)
        if (!Client::belongs_to_active_user($this->client_id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        return true;
    }

    public static function retrieve($search = false, $search_params = []) {
        // $search_params is just $_GET superglobal

        global $db;
        global $session;

        $types = "i";
        $values = [
            $session->user_id
        ];

        $sql = "SELECT Co.id AS contract_id, Cl.id AS client_id, Cl.name ";
        $sql.= "FROM " . Contract::get_table_name() . " AS Co ";
        $sql.= "JOIN " . Client::get_table_name() . " AS Cl ";
        $sql.= "ON ";
        $sql.= "Co.client_id = Cl.id ";
        $sql.= "WHERE Cl.user_id = ? ";

        if ($search) {
            if (isset($search_params['id'])
                && !empty($search_params['id'])
                && filter_var($search_params['id'], FILTER_VALIDATE_INT)
            ) {
                $sql.= "AND Co.id = ? ";
                $types.= "i";
                array_push($values, trim($search_params['id']));
            }
            if (isset($search_params['client_id'])
                && !empty($search_params['client_id'])
                && filter_var($search_params['client_id'], FILTER_VALIDATE_INT)
            ) {
                $sql.= "AND Cl.id = ? ";
                $types.= "i";
                array_push($values, trim($search_params['client_id']));
            }
            if (isset($search_params['client_name'])
                && !empty($search_params['client_name'])
                && preg_match('/[a-z_\-0-9]/i', $search_params['client_name'])
                && strlen($search_params['client_name']) < LIMIT_CLIENT_NAME
            ) {
                $sql.= "AND Cl.name LIKE ? ";
                $types.= "s";
                array_push($values, "%" . trim($search_params['client_name']) . "%");
            }
        }

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        $results = $stmt->get_result();

        $result_set = self::retrieve_objects_from_db($results, false);

        return $result_set;
    }

    public static function initialise_existing($client_id, $contract_id) {
        $existing_contract = new Contract;
        $existing_contract->client_id = trim($client_id);
        $existing_contract->id = trim($contract_id);
        return $existing_contract;
    }

    public static function initialise_new($client_id) {
        $new_contract = new Contract;
        $new_contract->client_id = trim($client_id);
        return $new_contract;
    }

} // end of class Contract

?>