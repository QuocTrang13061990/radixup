<?php 

session_start();
require_once '../config.php';


if (!empty($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header('Location: ' . _WEB_HOST_ROOT_ADMIN . '');
