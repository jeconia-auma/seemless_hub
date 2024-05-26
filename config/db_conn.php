<?php

    require_once('constants.php');
    
    $conn = new MySqli(SERVERNAME, USERNAME, PASSWORD, DB);

    if($conn){
        echo "done";
    }else{
        echo "failed";
    }
?>