<?php
session_start();
include("../connection.php");
include("../head.php");
if (!isset($_SESSION['LoginSl'])) {
    header("location:../login_saler.php");
}
?>

    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới</h5>
        <form action="p_sl_add.php" method="post"enctype="multipart/form-data">         
            <div class="form-group"> 
                <label for="txtChucVu">Tên</label>
                <input type="text" class="form-control" name="txtTen" >
            </div>

            <div class="form-group">
                <label for="txtSoMayBan">Giá</label>
                <input type="tel" class="form-control" name="txtGia" >
            </div>
            <div class="form-group">
                <label for="txtSoDong">Ảnh</label>
                <input type="file" class="form-control" name="txtAnh" >
                
            </div>
            <div class="form-group">
                <label for="txtEmail">Số lượng</label>
                <input type="" class="form-control" name="txtSL" >
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>