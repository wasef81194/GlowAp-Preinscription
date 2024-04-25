<?php
class Database {
    protected $connection;

    public function __construct() {

        $this->connection = new mysqli(
            DB_HOST,
            DB_USER,
            DB_PASS,
            DB_NAME
        );

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function insert($table, $data) {
        // $data est un tableau associatif avec les données à insérer
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Vous pouvez ajouter d'autres méthodes pour implémenter Read, Update et Delete
}

?>
