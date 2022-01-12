<?php

include('header.php');
$food_isbn = $_GET['foodisbn'];


$query = "SELECT * FROM foods WHERE food_isbn = '$food_isbn' ";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Không thể truy xuất dữ liệu " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_array($result);
if (!$row) {
    echo "trống";
    exit;
}

<!-- Example row of columns -->
<div class="container">
    <form method="post" class="mb-4" action="cart.php">
        <h5 class="mt-3 mb-3"><a href="foods.php" class="text-decoration-none text-danger">Tất sản phẩm</a> > <?php echo $row['food_title']; ?></h5>
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img-thumbnail img-fluid" src="<?php echo $row['food_image']; ?>">
            </div>
            <div class="col-md-6">
                <h4>Miêu tả</h4>
                <p><?php echo $row['food_descr']; ?></p>
                <h4>Chi tiết</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $row['food_isbn'] ?></th>
                            <td><?= $row['food_Category'] ?></td>
                            <td><?= $row['food_price'] ?></td>
                        </tr>
                    </tbody>
                    <?php
                    if (isset($conn)) {
                        mysqli_close($conn);
                    }
                    ?>
                </table>


                <input type="hidden" name="foodisbn" value="<?php echo $food_isbn; ?>">
                <input type="submit" value=" Thêm vào giỏ hàng" name="cart" class="form-control btn btn-outline-danger ">
    </form>



</div>