<?php 
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
?>