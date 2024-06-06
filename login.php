<?php
    include_once('config/session_checker.php');
    include_once('config/config.php');
    
    if(isset($_POST['submit'])){
        echo "test";
        echo $email = $_POST['email'];
        echo $password = sha1($_POST['password']);

        $sql = "select * from users where email='$email' and password='$password'";
        $result = $conn->query($sql);

        if($result->num_rows < 1){
            echo "Failed to login!!! Wrong username or password";
        }else {
            echo "Logged in successfully";
            $_SESSION['login'] = 1;
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $_SESSION['userId'] = $row['id'];
            }
            header('location: index.php');
        }
    }else {
        echo "failed";
    }
?>