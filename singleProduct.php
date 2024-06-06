<?php
    include_once('config/config.php');
    include_once('partials/header.php');
    if(isset($_GET['search-name'])){
        echo $searchName = $_GET['search-name'];

        $sql = "Select * from products where title like '%$searchName%'";
        $result = $conn->query($sql);
?>

<!-- features section starts  -->

<section class="features" id="features">
    <br><br><br>

    <h1 class="heading"> Search <span>Results</span> </h1>

    <div class="box-container">

        <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                        <div class="box">
                            <img src="<?php echo $row['img1']; ?>" alt="">
                            <h3><?php echo $row['title']; ?></h3>
                            <p>Ksh. <?php echo $row['price']; ?> /=</p>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    <?php
                }
            }else {
                ?>
                    <div class="box">
                        Not Found
                        <!-- <a href="#" class="btn">add to cart</a> -->
                    </div>
                <?php
            }
        }else{
            ?>
                <div class="box">
                    Not Found
                    <!-- <a href="#" class="btn">add to cart</a> -->
                </div>
            <?php
        }
        ?>

    </div>

</section>

<!-- features section ends -->


<?php include_once('partials/footer.php'); ?>