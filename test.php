<?php
    include_once('partials/header.php');
    require('config/config.php');

    echo $searchName = $_GET['name'];

    $sql = "select * from products where title like '%$searchName%'";
    $result = $conn->query($sql);
?>

<!-- features section starts  -->

<section class="features" id="features">
    <br><br><br>

    <h1 class="heading"> Search <span>Results</span> </h1>

    <div class="box-container">
        <?php
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
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
                echo 'failed to search';
            }
        ?>

<?php echo "$searchName"; ?>
    </div>

</section>

<!-- features section ends -->


<?php include_once('partials/footer.php'); ?>