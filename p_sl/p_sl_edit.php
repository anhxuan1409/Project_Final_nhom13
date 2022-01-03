<?php
    session_start();
    if(!isset($_SESSION['LoginSl'])){
        header("location:login_saler.php");
    }
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMa'])){
        $ma = $_POST['txtMa'];
    }
    $Ten      = $_POST['txtTen'];
    $gia      = $_POST['txtGia'];
    $anh      = $_FILES['txtAnh']['name'];
    $target = "photo/".basename($anh);
    if (move_uploaded_file($_FILES['txtAnh']['tmp_name'], $target)) {
    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
    }else{
    echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
    $sl      = $_POST['txtSL'];
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE db_good SET good_name ='$Ten', price='$gia', image = '$anh', good_sl = '$sl' WHERE good_id = '$ma'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: ../error.php"); //Chuyển hướng lỗi
    }else{
        header("location: ../saler.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>