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
        echo $dac->showMessage('warning', 'This E-mail is registered!');
    } else {
        if ($user->registerUser($username, $email, $hpass)) {
            echo 'register';
            $_SESSION['user'] = $email;
        } else {
            echo $dac->showMessage('warning', 'Something went wrong. Try agian later!');
        }
    }
    
}

// Handle Login Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $dac->testInput($_POST['email']);
    $password = $dac->testInput($_POST['password']);

    $userInfoArr = $user->existUser($email);
    if ($userInfoArr) {
        if (password_verify($password, $userInfoArr['password'])) {
            if (!empty($_POST['rem'])) {
                setcookie('email', $email, time() + (30*24*60*60), '/');
                setcookie('password', $password, time() + (30*24*60*60), '/');
            } else {
                setcookie('email', '', time() - 60, '/');
                setcookie('password', '', time() - 60, '/');
            }
            echo 'login';
            $_SESSION['login'] = $email;
        } else {
            echo $dac->showMessage('warning', 'Incorrect password!');
        }
    } else {
        echo $dac->showMessage('warning', 'E-mail does not exist in the system!');
    }
}
