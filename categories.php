<!-- header section starts -->
<?php
    include_once('partials/header.php');
    include_once('config/config.php');

    $sql = "select * from categories";
    $result = $conn->query($sql);
?>

<!-- categories section starts  -->

<section class="categories" id="categories">
    <br><br><br>

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">
    <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>

                        <div class="box">
                            <img src="<?php echo $row['img']; ?>" alt="">
                            <h3><?php echo $row['name']; ?></h3>
                            <p>upto 45% off</p>
                            <a href="categorizedProducts.php?id=<?php echo $row['id']; ?>" class="btn">shop now</a>
                        </div>

                        
                        <?php
            }
        }
        ?>
    </div>

</section>

<!-- categories section ends -->

<!-- footer section starts -->
<?php include_once('partials/footer.php'); ?>