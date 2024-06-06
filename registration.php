<?php

    include_once('config/config.php');

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $email = strtolower($_POST['email']);
        $password = sha1(strtolower($_POST['password']));
        $rank = 2;

        $emailCheckSql = "select * from users where email = '$email'";
        $emailResult = $conn->query($emailCheckSql);

        if($emailResult->num_rows > 0){
            echo "email exists";
        }else {
            $sql = "insert into users(firstName, middleName, lastName, password, email, rank) values('$firstName', '$middleName', '$lastName', '$password', '$email', $rank)";
            $result = $conn->query($sql);

            if($result){
                echo "success";
                header('location: index.php');
            }
        }
    }

?>