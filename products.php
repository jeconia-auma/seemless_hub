<?php
    include_once('config/config.php');

    // header section starts
    include_once('partials/header.php');

    $sql = "select * from products where price>0 limit 4";
    $result = $conn->query($sql);

    $sql2 = "select * from products where price>4 limit 4 offset 4";
    $result2 = $conn->query($sql2);
?>

<!-- products section starts  -->

<section class="products" id="products">
    <br><br><br>

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                            <div class="swiper-slide box">
                                <img src="<?php echo $row['img1']; ?>" alt="">
                                <h3><?php echo $row['title']; ?></h3>
                                <div class="price"> Ksh. <?php echo $row['price']; ?></div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a href="cart.php/?id=<?php echo $row['id']; ?>" class="btn">add to cart</a>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>

    </div>

    <!--second part of the product swiper-->

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            <?php
                if($result2->num_rows > 0){
                    while($row2 = $result2->fetch_assoc()){
                        ?>
                            <div class="swiper-slide box">
                                <img src="<?php echo $row2['img1']; ?>" alt="">
                                <h3><?php echo $row2['title']; ?></h3>
                                <div class="price">  Ksh. <?php echo $row2['price']; ?></div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a href="cart.php/?id=<?php echo $row2['id']; ?>" class="btn">add to cart</a>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>

    </div>


</section>

<!-- products section ends -->


<!-- footer section starts -->
<?php include_once('partials/footer.php'); ?>