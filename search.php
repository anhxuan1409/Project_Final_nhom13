<?php

include('header.php');


$search = mysqli_real_escape_string($conn, $_POST['search']);

?>

<section class="">
    <div class="container">
        <h5 class="">Món mà bạn muốn tìm : <a class="text-danger text-decoration-none">"<?php echo $search ?>"</a></h5>

        <?php


        $sql = "SELECT * FROM foods WHERE food_title LIKE '%$search%' OR food_descr LIKE '%$search%'";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Count Rows
        $count = mysqli_num_rows($res);

        //Check whether books available of not
        if ($count > 0) { ?>
            <div class="books-menu-box">
                <div class="row">
                    <?php while ($query_row = mysqli_fetch_assoc($res)) { ?>
                        <div class="col-md-3 mb-5 text-center">
                            <div class="card" style="width: 14rem; height: 29rem;">
                                <a href="food.php?foodisbn=<?php echo $query_row['food_isbn']; ?>" class="text-decoration-none text-dark">
                                    <img src="<?php echo $query_row['food_image']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $query_row['food_title'] ?></h5>
                                        <p class="card-text"><?php echo $query_row['food_price'] ?></p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php } ?>
                </div>


                </form>
            </div>
    </div>

<?php
        } else { ?>
    <div class='error mt-3'>Không tìm thấy!</div>
<?php }

?>

</div>

</section>

<?php include('footer.php'); ?>