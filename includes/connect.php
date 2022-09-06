<?php
class Database {
    private $dsn = 'mysql:host=localhost; dbname=radix; charset=utf8';
    private $dbuser = 'root';
    private $dbpass = '';

    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            // echo 'Connected Successfully to the database!';
        }catch(PDOException $e) {
            echo 'Error: '.$e->getMessage();
        }
        return $this->conn;
    }
}

// $ob = new Database;

?>