<?php
    //require the constants
    require_once('constants.php');

    //connect to the database.
    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DB);

    //check connection errors
    if($conn->connect_error){
        die("error: ".$conn->connect_error);
    }
?>