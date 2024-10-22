<?php
class DatabaseConnection {
    private static $instance = null;
    private $connection;
    
    private $host = "localhost";
    private $username = "root"; 
    private $password = ""; 
    private $database = "mi_crud_db";

    private function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Conexión fallida: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance->connection;
    }
}
?>

