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

