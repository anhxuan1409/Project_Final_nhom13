<?php
    //Một số kỹ thuật validate form được xử lý ở Js
    //Coi các vấn đề đó ko tồn tại ở đây

    if(!isset($_POST['btnSignUp'])){
    header("location:signup_saler.php");
    }
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];

    //Mục tiêu: CHÈN BẢN GHI ĐĂNG KÍ TÀI KHOẢN VÀO CSDL NHƯNG PHẢI KTRA XEM CÓ TỒN TẠI KO
    // Bước 01: Kết nối Database Server
   
   
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM db_saler WHERE saler_email = '$email' OR saler_name = '$user'";
    // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection

    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Tài khoản đã tồn tại!";
        echo $pass1 . "<br>";
        $pass1 = md5($pass1);
        echo $pass1;
    }else{
        echo $pass1 . "<br>";
        $pass1 = md5($pass1);
        echo $pass1;
        $sql02 = "INSERT INTO db_saler (saler_name, saler_email, saler_pass) VALUES('$user', '$email', '$pass1')";
        $result02 = mysqli_query($conn,$sql02);
        if($result02 == true){
            header("location: login_saler.php");
        }else{
<<<<<<< HEAD
            $error = "Đăng kí không thành công, xin mời kiểm tra lại ....";
=======
            $error = "Không thể đăng kí, vui lòng kiểm tra ....";
>>>>>>> 76_anhxuan_1951061136
            header("location: signup_saler.php?error=$error");
    }
    
}
// Bước 03: Đóng kết nối
mysqli_close($conn);
?>