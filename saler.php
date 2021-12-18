<?php
session_start();
if (!isset($_SESSION['LoginSl'])) {
    header("location:login_saler.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="shortcut icon" href="documents/unnamed(1).png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/login.css">
    <title>Foody</title>
</head>

<body>

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
                            <button class="btn btn-outline-danger">
                                <?php echo $row['saler_name']; ?>
                                's Shop
                            </button>


                    <?php
                        }
                    }
                    ?>
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