<?php
echo $_SESSION ['CART'];    
    // Xử lý giá trị GỬI TỚI
    // if(isset($_POST['BTN'])){
    //     $ten = $_POST['NAME'];
    //     $gia = $_POST['PRICE'];
    //     $anh = $_POST['IMG'];
    // // Bước 01: Kết nối Database Server
    // $conn = mysqli_connect('localhost','root','','foody');
    // if(!$conn){
    //     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    // }
    // // Bước 02: Thực hiện truy vấn
    // $sql = "INSERT INTO db_invoice (good_name, good_price, good_img) VALUES ('$ten','$gia','$anh')";
    
    // $ketqua = mysqli_query($conn,$sql);
    
    // if(!$ketqua){
    //     header("location: error.php"); //Chuyển hướng lỗi
    // }else{
    //     header("location: cart.php"); //Chuyển hướng lại Trang Quản trị
    // }

    // // Bước 03: Đóng kết nối
    // mysqli_close($conn);
    // }
?>