<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtTen'])){
        $ten = $_POST['txtTen'];
    }
    
    $gia = $_POST['txtGia'];
    $anh = $_FILES['txtAnh']['name'];
    $target = "photo/".basename($anh);
    if (move_uploaded_file($_FILES['txtAnh']['tmp_name'], $target)) {
    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
    }else{
    echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }

    $sl = $_POST['txtSL'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO db_good (good_name, price, image, good_sl) VALUES ('$ten','$gia','$anh','$sl')";
    
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: ../saler.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
