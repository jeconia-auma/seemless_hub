<?php
    require_once('config/session_checker.php');
    require_once('config/config.php');

    $id = $_SESSION['userId'];

    $cart = "select * from cart where userId=$id";
    $cartResult = $conn->query($cart);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaykaa - Food Ordering Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> SeemlessHub  </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php#features">features</a>
        <a href="products.php">products</a>
        <a href="categories.php">categories</a>
        <a href="reviews.php">review</a>
        <a href="blogs.php">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <!--for the search btn-->

    <form action="singleProduct.php" class="search-form" id="search-form">
        <input type="search" id="search-box" placeholder="search here..." name="search-name">
        <label for="search-button" class="fas fa-search"></label>
        <!-- <input type="submit" name="submit"> -->
    </form>

    <!--items in shopping cart-->

    <div class="shopping-cart">
        <?php
            if($cartResult->num_rows > 0){
                $amount = 0;
                while($cartRow = $cartResult->fetch_assoc()){
                    $productId = $cartRow['productId'];
                    $productSql = "select * from products where id=$productId";
                    $productQuery = $conn->query($productSql);
                    $product = $productQuery->fetch_assoc();

        ?>
                    <div class="box">
                    <i class="fas fa-trash"></i>
                    <img src="<?php echo $product['img1']; ?>" alt="">
                    <div class="content">
                        <h3><?php echo $product['title']; ?></h3>
                        <span class="price"><?php echo $product['price'] * $cartRow['quantity']; ?></span>
                        <span class="quantity">qty : <?php echo $cartRow['quantity']; ?></span>
                    </div>
                    </div>
        <?php
                    $amount += ($product['price'] * $cartRow['quantity']);
                }
            }else {
                echo "<h3>Nothing in cart</h3>";
            }
        ?>
        

        <!--totals for items in shopping cart-->

        <div class="total"> total :  Ksh. <?php if(isset($amount)){echo $amount; }?>/- </div>
            <a href="checkout.php?checkout=<?php echo $_SESSION['login']; ?>" class="btn">checkout</a>
        </div>

    <!--for login icon-->

    <?php
        if(!isset($_SESSION['login'])){
            ?>
                <form action="login.php" class="login-form" method="post">
                    <h3>login now</h3>
                    <input type="email" placeholder="your email" class="box" name="email">
                    <input type="password" placeholder="your password" class="box" name="password">
                    <p>forget your password <a href="#">click here</a></p>
                    <p>don't have an account <a href="register.php">create now</a></p>
                    <input type="submit" value="login now" class="btn" name="submit">
                </form>
                <?php
        }else{
            ?>
                <form action="logout.php" class="login-form" method="post">
                    <h3>log out</h3>
                    <input type="submit" value="logout now" class="btn" name="submit">
                </form>
            <?php
        }
        ?>

</header>

<!-- header section ends -->