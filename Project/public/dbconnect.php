<?php
//Database connection class
class Database {
    private $host = "localhost"; 
    private $db_name = "Project";
    private $username = "root";
    private $password = ""; //empty because no password
    public $conn;

    // Establish database connection
    public function connect() {
        $this->conn = null; // initialise connection as null
        try {
            //create new PDO connection 
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage(); // displays connection error
        }

        return $this->conn;
    }
}

