<?php

    include_once('config/session_checker.php');
    include_once('config/config.php');

    if(!isset($_GET['id'])){
        echo "NO Products Set";
    }else{
        $id = $_GET['id'];
        $userId = $_SESSION['login'];

        $additionSql = "select * from cart where productId=$id and userId=$userId";
        $additionResult = $conn->query($additionSql);

        if($additionResult->num_rows > 0){
            $quantity = $additionResult->num_rows + 1;
            $sql = "select * from products where id=$id";
            $result = $conn->query($sql);
    
            if($result->num_rows != 1){
                echo "echo no result found";
            }else {
                echo $userId = $_SESSION['userId'];
                $row = $result->fetch_assoc();
                $price = $row['price'];
                echo $sql2 = "update cart set quantity=$quantity where productId=$id and userId=$userId";
                $result2 = $conn->query($sql2);
    
                if($result){
                    echo "success";
                    header("location: ../products.php");
                }
            }
        }else{
            $sql = "select * from products where id=$id";
            $result = $conn->query($sql);
    
            if($result->num_rows != 1){
                echo "echo no result found";
            }else {
                echo $userId = $_SESSION['userId'];
                $row = $result->fetch_assoc();
                $price = $row['price'];
                echo $sql2 = "insert into cart(productId, quantity, userId, discount, total) values($id, 1, $userId, 0, $price)";
                $result2 = $conn->query($sql2);
    
                if($result){
                    echo "success";
                    header("location: ../products.php");
                }
            }
        }
    }
?>