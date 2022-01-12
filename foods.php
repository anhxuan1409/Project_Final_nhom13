<?php
include('header.php');

$query = "SELECT * FROM foods";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Không thể truy xuất dữ liệu " . mysqli_error($conn);
    exit;
}

?>
