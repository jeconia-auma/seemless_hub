<?php
    include_once('config/session_checker.php');
    include_once('config/config.php');

    if(isset($_GET)){
        $userId = $_SESSION['userId'];
        $checkoutSql = "select distinct checkoutId from orders where userId = $userId";

        $checkoutResult = $conn->query($checkoutSql);
        $discount = 0;

        $checkoutId = $checkoutResult->num_rows + 1;

        echo $sql = "select * from cart where userId = $userId";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $userId = $_SESSION['userId'];
                $productId = $row['productId'];
                $quantity = $row['quantity'];

                $priceSql = "select price from products where id=$productId";
                $priceResult = $conn->query($priceSql);
                $priceRow = $priceResult->fetch_assoc();

                $amount = $priceRow['price'] * $quantity;

                $orderSql = "insert into orders(checkoutId, productId, quantity, userId, discount, total) values($checkoutId, $productId, $quantity, $userId, $discount, $amount)";
                $orderResult = $conn->query($orderSql);

                

                if($orderSql){
                    echo "success";
                    
                }
            }
        }
    }

    $deleteSql = "DELETE FROM cart WHERE userId = $userId";
    $deleteQuery = $conn->query($deleteSql);

    echo $conn->error;

    header("location: index.php");
?>