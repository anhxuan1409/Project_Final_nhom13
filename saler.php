<?php
session_start();
include("connection.php");
include("head.php");
if (!isset($_SESSION['LoginSl'])) {
    header("location:login_saler.php");
}
?>


    <div style="top: 0px; width: 100%; background-color: #D34836; height: 5px;"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 5px;">
        <div class="container-fluid" style="justify-content: center;justify-items: center;">
            <a class="navbar-brand" href="home.php"><img src="documents/foody.png" class="img-fluid"></a>
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
            <table class="table" style="font-size:13px">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Só lượng</th>
                    </tr>
                </thead>
            </table>
            <div class="d-flex align-items-center d-flex justify-content-center mb-3">
                <?php if (isset($_SESSION['LoginSl'])) {
                    echo "<a class='btn btn-outline-danger' href='logout_saler.php'>Đăng xuất</a>";
                } ?></a>
            </div>

        </div>
    </main>


    <?php
    include("template/footer.php");
    ?>