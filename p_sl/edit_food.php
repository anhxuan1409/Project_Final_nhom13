<?php
    session_start();
    if(!isset($_SESSION['LoginSl'])){
        header("location:login_saler.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','foody');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_good WHERE good_id = '$ma'";

    $result = mysqli_query($conn,$sql);

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
   include("../head.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Sửa</h5>
        <form action="p_sl_edit.php" method="post"enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtMa">Mã</label>
                <input type="text" class="form-control" readonly name="txtMa" value="<?php echo $row['good_id']; ?>">
            </div>

            <div class="form-group">
                <label for="txtTen">Tên</label>
                <input type="text" class="form-control" name="txtTen" value="<?php echo $row['good_name']; ?>">
            </div>
            <div class="form-group">
                <label for="txtAnh">Ảnh</label>
                <input type="file" class="form-control" name="txtAnh" value="<?php echo $row['image']; ?>">
            </div>
            <div class="form-group">
                <label for="txtGia">Giá</label>
                <input type="text" class="form-control" name="txtGia" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <label for="txtSL">Số lượng</label>
                <input type="text" class="form-control" name="txtSL" value="<?php echo $row['good_sl']; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>