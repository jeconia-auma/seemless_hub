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

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <!--items in shopping cart-->

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/Matar-Paneer-1.jpg" alt="">
            <div class="content">
                <h3>Matar paneer</h3>
                <span class="price"> Ksh. 60/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/ladyfinger.webp" alt="">
            <div class="content">
                <h3> Fried - Bhindi</h3>
                <span class="price"> Ksh. 40 /-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/pneer.jpg" alt="">
            <div class="content">
                <h3>paneer</h3>
                <span class="price"> Ksh. 150/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>

        <!--totals for items in shopping cart-->

        <div class="total"> total :  Ksh. 250/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <!--for login icon-->

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- header section ends -->