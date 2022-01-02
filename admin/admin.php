<?php
    session_start();
    include("../head.php");
    if(!isset($_SESSION['ADLoginOK'])){
        header("location:logad.php");
    }
?>
    <div style="top: 0px; width: 100%; background-color: #D34836; height: 5px;"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 5px;">
        <div class="container-fluid" style="justify-content: center;justify-items: center;">
            <a class="navbar-brand" href="index.php"><img src="../documents/foody.png" class="img-fluid"></a>
        </div>
    </nav>

    <main>
        <div class="container container-fluid">
            <h5 class="text-center text-danger mt-5 mb-5" style="font-size:18px">Quản Lý người mua</h5>
            <table class="table mb-3">
                <thead>
                    <tr>
                        <th scope="col">Mã người mua</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số lượng đơn hàng</th>
                        <th scope="col">Xóa Tài khoản</th>
                        <th scope="col">Ban tài khảon</th>
                        <th scope="col">Mở Ban tài khoản</th>
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
                $sql = "SELECT * FROM db_user";
                $result = mysqli_query($conn, $sql);
                // Bước 03: Xử lý kết quả truy vấn
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['user_id']; ?></th>
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['user_phone']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_add']; ?></td>
                            <td><?php $sql1 = "SELECT COUNT(invoice_id) FROM db_invoice INNER JOIN db_user ON db_invoice.user_id = db_user.user_id "; ?></td>
                            <td><a href="delete_user.php?id=<?php echo $row['user_id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                            <td><a href="#?id=<?php echo $row['user_id']; ?>"><i class="fas fa-ban"></i></a></td>
                            <td><a href="#?id=<?php echo $row['user_id']; ?>"><i class="fas fa-unlock"></i></a></td>
                        </tr>
                        
                <?php
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?>
            </tbody>
            </table>
            <br>
            <h5 class="text-center text-danger mt-5 mb-5" style="font-size:18px">Quản Lý người bán</h5>
            <table class="table mb-3">
                <thead>
                    <tr>
                        <th scope="col">Mã người bán</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số lượng sản phẩm</th>
                        <th scope="col">Xóa Tài khoản</th>
                        <th scope="col">Ban tài khảon</th>
                        <th scope="col">Mở Ban tài khoản</th>
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
                $sql = "SELECT * FROM db_saler";
                $result = mysqli_query($conn, $sql);
                // Bước 03: Xử lý kết quả truy vấn
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['saler_id']; ?></th>
                            <td><?php echo $row['saler_name']; ?></td>
                            <td><?php echo $row['saler_phone']; ?></td>
                            <td><?php echo $row['saler_email']; ?></td>
                            <td><?php echo $row['saler_add']; ?></td>
                            <td><?php $sql2 = "SELECT COUNT(good_id) FROM (db_good INNER JOIN db_invoice ON db_good.good_id = db_invoice.user_id) INNER JOIN db_saler ON db_saler.saler_id = db_invoice.saler_id"; ?></td>
                            <td><a href="delete_saler.php?id=<?php echo $row['saler_id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                            <td><a href="#?id=<?php echo $row['saler_id']; ?>"><i class="fas fa-ban"></i></a></td>
                            <td><a href="#?id=<?php echo $row['saler_id']; ?>"><i class="fas fa-unlock"></i></a></td>
                        </tr>
                        
                <?php
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?>
            </tbody>
            </table>
        </div>
        <div class="d-flex align-items-center d-flex justify-content-center mb-3">
                <?php if (isset($_SESSION['ADLoginOK'])) {
                    echo "<a class='btn btn-outline-danger' href='adlogout.php'>Đăng xuất</a>";
                } ?></a>
            </div>
    </main>