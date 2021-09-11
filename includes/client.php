<?php

class Client extends db_objects {

    protected static $db_table = "clients";
    protected static $db_table_fields = array("id", "name");

    public $id;
    public $user_id;
    public $name;

    public function save(){
        global $db;

        $sql = "INSERT INTO " . Client::get_table_name() . " (name) VALUES (?)";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("s", $this->name);
        $stmt->execute();
        
        $this->id = $db->inserted_id();

        return true;
    }

    public static function retrieve() {
        global $db;
        global $session;

        $sql = "SELECT * FROM " . Client::get_table_name() . " ";
        $sql.= "WHERE user_id = ? ";

        $stmt = $db->connection->prepare($sql);
        $stmt->bind_param("s", $session->user_id);
        $stmt->execute();
        $results = $stmt->get_result();
        $result_set = self::retrieve_objects_from_db($results);

        print_r($result_set);

        return $result_set;
    }

} // end of class Client

?>