<?php
    include_once('config/session_checker.php');

    unset($_SESSION['login']);

    header('location: index.php');
?>