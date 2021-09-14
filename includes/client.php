<?php

class Client extends db_objects {

    protected static $db_table = "clients";
    protected static $db_table_fields = array("id", "name");

    public $id;
    public $user_id;
    public $name;

    public function save(){

        if (isset($this->id) && !empty($this->id)) {
            return $this->update();
        }

        global $db;

        $sql = "INSERT INTO " . self::get_table_name() . " (user_id, name) VALUES (?, ?)";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("is", $this->user_id, $this->name);
        $stmt->execute();
        
        $this->id = $db->inserted_id();

        return true;
    }

    public function delete() {

        $this->delete_all_contracts();

        global $db;

        $sql = "DELETE FROM " . self::get_table_name() . " ";
        $sql.= "WHERE id = ? AND user_id = ? ";
        $sql.= "LIMIT 1 ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $this->id, $this->user_id);
        $stmt->execute();

        return true;
    }

    public function delete_all_contracts() {
        global $db;

        $sql = "DELETE FROM " . Contract::get_table_name() . " ";
        $sql.= "WHERE client_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();

        return true;
    }

    public function update() {
        global $db;

        $sql = "UPDATE " . self::get_table_name() . " ";
        $sql.= "SET name = ? ";
        $sql.= "WHERE id = ? AND user_id = ? ";
        $sql.= "LIMIT 1 ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("sii", $this->name, $this->id, $this->user_id);
        $stmt->execute();

        return true;
    }

    public function verify_delete() {

        // Check if there is a client ID and user ID set
        // If not, log the user out before the client can be edited
        if (!isset($this->id) || empty($this->id))           $this->errors['logout'] = 1;
        if (!isset($this->user_id) || empty($this->user_id)) $this->errors['logout'] = 1;

        // Check if this client belongs to the user
        if (!self::belongs_to_active_user($this->id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        return true;
    }

    public function verify_existing() {
        // Check if there is a client ID and user ID set
        // If not, log the user out before the client can be edited
        if (!isset($this->id) || empty($this->id))           $this->errors['logout'] = 1;
        if (!isset($this->user_id) || empty($this->user_id)) $this->errors['logout'] = 1;

        // Check if this client belongs to the user
        if (!self::belongs_to_active_user($this->id)) $this->errors['logout'] = 1;

        if (!empty($this->errors)) return false;

        // Check empty fields, field lengths, and regex out anything other than alphanumerics
        if (empty($this->name) || strlen($this->name < 1)) $this->errors['name'] = CLIENTS_ERROR_NAME_EMPTY;
        if (strlen($this->name) > LIMIT_CLIENT_NAME)       $this->errors['name'] = CLIENTS_ERROR_NAME_LENGTH;
        if (!preg_match('/[a-z_\-0-9]/i', $this->name))    $this->errors['name'] = CLIENTS_ERROR_NAME_SYMBOLS;

        if (!empty($this->errors)) return false;

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

    public static function retrieve($search = false, $search_params = []) {
        // $search_params is just $_GET superglobal

        global $db;
        global $session;

        $types = "i";
        $values = [
            $session->user_id
        ];

        $sql = "SELECT * FROM " . Client::get_table_name() . " ";
        $sql.= "WHERE user_id = ? ";

        if ($search) {
            if (isset($search_params['id'])
                && !empty($search_params['id'])
                && filter_var($search_params['id'], FILTER_VALIDATE_INT)
            ) {
                $sql.= "AND id = ? ";
                $types.= "i";
                array_push($values, trim($search_params['id']));
            }
            if (isset($search_params['name'])
                && !empty($search_params['name'])
                && preg_match('/[a-z_\-0-9]/i', $search_params['name'])
                && strlen($search_params['name']) < LIMIT_CLIENT_NAME
            ) {
                $sql.= "AND name LIKE ? ";
                $types.= "s";
                array_push($values, "%" . trim($search_params['name']) . "%");
            }
        }

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param($types, ...$values);
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

    public static function initialise_existing($id, $name, $user_id) {
        $existing_client = new Client;
        $existing_client->id = trim($id);
        $existing_client->name = trim($name);
        $existing_client->user_id = $user_id;

        return $existing_client;
    }

    public static function belongs_to_active_user($client_id) {
        global $db;
        global $session;

        $sql = "SELECT COUNT(*) FROM " . self::get_table_name() . " ";
        $sql.= "WHERE id = ? AND user_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("ii", $client_id, $session->user_id);
        $stmt->execute();
        $results = $stmt->get_result();

        return ($results->num_rows == 1) ? true : false;

    }
} // end of class Client

?>