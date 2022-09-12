<?php 
require_once 'connect.php';

class Auth extends Database {
    

    // check exists email in DB
    function existUser($email){
        $sql = 'SELECT email, password FROM users WHERE email = :email';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Nếu tìm thấy trả về Arr, còn không trả về false
        return $result;
    }
    // new user register
    function registerUser($name, $email, $pass) {
        $dataInsert = [
            'fullname' => $name,
            'email' => $email,
            'password' => $pass,
            'create_at' => date('Y-m-d H:i:s')
        ];
        return $this->insert('users', $dataInsert);
    }
    // Get infor user login current
    function userInfoLogin($email) {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Nếu tìm thấy trả về Arr, còn không trả về false
        return $result;
    }
}

?>