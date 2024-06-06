<!-- header section starts -->
<?php
    include_once('partials/header.php');
    include_once('config/config.php');

    $category = $_GET['id'];
    
    $sql = "select * from products where category=$category";
    $result = $conn->query($sql);
?>

<!-- products section starts  -->

<section class="categories" id="categories">
    <br><br><br>

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swipers product-slider">

        <div class="box-container">
            <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                            <div class="box">
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


</section>

<!-- products section ends -->

<!-- footer section starts -->
<?php include_once('partials/footer.php'); ?>