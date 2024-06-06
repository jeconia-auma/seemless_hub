<?php 
    require_once('config/db_conn.php');
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $sql = "insert into subscribers(email) values('$email')";
        if($conn->query($sql)){
            echo "<script>alert('success');</script>";
            // header('location: index.php');
        }
    }else {
        echo 'failed to register';
    }

?>