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
    $sql01 = "SELECT * FROM db_user WHERE user_email = '$email' OR user_name = '$user'";
    // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection

    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Tài khoản đã tồn tại!";
        header("location: signup_user.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }else{
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO db_user (user_name, user_email, user_pass) VALUES('$user', '$email', '$pass_hash')";
        $result02 = mysqli_query($conn,$sql02);
        if($result02 == true){
            header("location: login.php");
        }else{
            $error = "Can not insert record. Please check ....";
            header("location: signup_user.php?error=$error");
    }
    
}
// Bước 03: Đóng kết nối
mysqli_close($conn);
?>