<?php

//Include constants.php file here
include('constants.php');

// 1. get the manv of dbnhanvien to be deleted
$food_isbn = $_GET['food_isbn'];

//2. Create SQL Query to Delete 
$sql = "DELETE FROM foods WHERE food_isbn='$food_isbn'";

//Execute the Query
$res = mysqli_query($conn, $sql);

// Check whether the query executed successfully or not
if ($res == true) {
    $_SESSION['delete'] = "<div class='danger'>xoa thanh cong.</div>";
    header('location:' . SITEURL . 'cart.php');
} else {
    $_SESSION['delete'] = "<div class='error'>xoa that bai.</div>";
    header('location:' . SITEURL . 'cart.php');
}
