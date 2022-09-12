<?php

session_start();
require_once '../config.php';
require_once 'auth.php';
$currUser = new Auth();

if (!isset($_SESSION['user'])) {
    header('Location: ' . _WEB_HOST_ROOT_ADMIN . '');
    die();
}

// Get infor User Login Current
$userInfoLogin = $currUser->userInfoLogin($_SESSION['user']);

