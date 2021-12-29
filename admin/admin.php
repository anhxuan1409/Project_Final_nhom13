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
                    </tr>
                </thead>
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
                    </tr>
                </thead>
            </table>
        </div>
        <div class="d-flex align-items-center d-flex justify-content-center mb-3">
                <?php if (isset($_SESSION['ADLoginOK'])) {
                    echo "<a class='btn btn-outline-danger' href='adlogout.php'>Đăng xuất</a>";
                } ?></a>
            </div>
    </main>