<?php
session_start();
include("../connection.php");
include("../head.php");
if (!isset($_SESSION['LoginSl'])) {
    header("location:../login_saler.php");
}
?>


<div style="top: 0px; width: 100%; background-color: #D34836; height: 5px;"></div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 5px;">
    <div class="container-fluid" style="justify-content: center;justify-items: center;">
        <a class="navbar-brand" href="saler.php"><img src="../documents/foody.png" class="img-fluid"></a>
    </div>
</nav>

<main>
    <div class="container container-fluid">
        <h5 class="text-center mt-5 mb-5 " style="font-size:18px"><a href="" class="text-danger" style="text-decoration: none">
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'foody');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }

                $sql = "SELECT * FROM db_saler WHERE saler_email = '" .  $_SESSION['LoginSl'] . "'";
                $result = mysqli_query($conn, $sql);
                $tmp  = mysqli_fetch_array($result);
                echo $tmp['saler_name']; ?>

            </a></h5>
        <div>
            <a class="btn btn-danger" href="#">Đơn hàng</a>
            <a class="btn btn-danger" href="../saler.php">Thêm</a>
        </div>
        <table class="table" style="font-size:13px">
            <thead>
                <tr>
                    <th scope="col">Mã khách</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Mã hóa đơn</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Só lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                // Bước 01: Kết nối Database Server
                $conn = mysqli_connect('localhost', 'root', '', 'foody');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                // Bước 02: Thực hiện truy vấn
                $sql = "SELECT * FROM db_good";
                $result = mysqli_query($conn, $sql);
                // Bước 03: Xử lý kết quả truy vấn
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['good_id']; ?></th>
                            <td><?php echo $row['good_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo "<div id='img_div'>";
                                echo "<img src='p_sl/photo/" . $row['image'] . "' >";
                                echo "</div>";
                                ?></td>
                            <td><?php echo $row['good_sl']; ?></td>
                        </tr>
                        
                <?php
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?>
                <style>
               img {
                height: 50px;
                width: 120px;
                object-fit: cover;
            }
        </style>


            </tbody>
        </table>
        
        <div class="d-flex align-items-center d-flex justify-content-center mb-3">
            <?php if (isset($_SESSION['LoginSl'])) {
                echo "<a class='btn btn-outline-danger' href='logout_saler.php'>Đăng xuất</a>";
            } ?></a>
        </div>

    </div>
</main>