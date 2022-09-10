<?php 

session_start();

if (!empty($_SESSION['login'])) {
    unset($_SESSION['login']);
    header('Location: ../admin/index.php');
}
