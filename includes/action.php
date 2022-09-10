<?php
session_start();
require_once 'function.php';
$dac = new Dac();
require_once 'auth.php';
$user = new Auth();

// Handle Register Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $username = $dac->testInput($_POST['name']);
    $email = $dac->testInput($_POST['email']);
    $password = $dac->testInput($_POST['rpassword']);
    $cpassword = $dac->testInput($_POST['rcpassword']);
    $hpass = password_hash($password, PASSWORD_DEFAULT);


    if ($user->existUser($email)) {
        echo $dac->showMessage('danger', 'This E-mail is registered!');
    } else {
        if ($user->registerUser($username, $email, $hpass)) {
            $_SESSION['user'] = $email;
            echo 'register';
        } else {
            echo $dac->showMessage('danger', 'Something went wrong. Try agian later!');
        }
    }
    
}

// Handle Login Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    
}
