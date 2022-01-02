<?php
    session_start();
    if(!isset($_SESSION['LoginSl'])){
        header("location:login_saler.php");
    }

    $ma = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM db_good WHERE good_id = '$ma'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: ../saler.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>