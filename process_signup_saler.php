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
    