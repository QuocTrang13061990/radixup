<?php
class Database {
    private $dsn = 'mysql:host=localhost; dbname=radix;charset=utf8';
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

    public function query($sql, $data = []) {
        $queryStatus = FALSE;
        try{
            $stmt = $this->conn->prepare($sql);
            if(empty($data)){
                $queryStatus = $stmt->execute();
            }else {
                $queryStatus = $stmt->execute($data);
            }    
        } catch(PDOException $e){
            require_once _WEB_PATH_ROOT . '/errors/database.php';
            die(); 
        }

        return $queryStatus;
    }

    public function insert($tbl, $dataArr) {
        $dataKey = array_keys($dataArr);
        $fieldStr = implode(', ', $dataKey);   
        $valueStr = ':'.implode(', :', $dataKey);   
        $sql = 'INSERT INTO ' . $tbl . ' (' . $fieldStr . ') VALUES ('.$valueStr.')';
        return $this->query($sql, $dataArr);
    }

}

// $ob = new Database;

?>