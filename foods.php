<?php
include('header.php');

$query = "SELECT * FROM foods";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Không thể truy xuất dữ liệu " . mysqli_error($conn);
    exit;
}

?>
<div class="container-fluid">
    <div class="row">
        <?php while ($query_row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-2 ms-3 me-2 mb-5 text-center zoom zoom">
                <a href="food.php?foodisbn=<?php echo $query_row['food_isbn']; ?>" class="text-decoration-none text-dark">
                    <div class="card" style="width: 15rem; height:25rem">
                        <img src="<?php echo $query_row['food_image']; ?>" class="card-img-top" style="height: 75%;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $query_row['food_title'] ?></h5>
                        </div>
                    </div>
                </a>


            </div>
        <?php } ?>
        <style>
               img {
                height: 70px;
                width: 120px;
                object-fit: cover;
                padding-bottom: 15px ;}
                </style>
    </div>

</div>
<?php
include("footer.php");
?>