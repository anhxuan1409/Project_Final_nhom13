<?php
$title = "Saler";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title></title>
</head>

<body>

    <!-- <div class="admin">
        <form class="form-horizontal" method="post">
            <div class="form-group">
                
                <div class="col-md-4">
                    
                </div>
            </div>
            <div class="form-group">
                
                <div class="col-md-4">
                    
                </div>
            </div>
            <button type="submit" class="btn btn-primary" >Đăng nhập</button>
        </form> -->


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" method="post">

                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="control-label col-md-4">Tên đăng nhập</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="control-label col-md-4">Mật khẩu</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Đăng nhập</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $email = $_POST['name'];
        $pass = md5($_POST['pass']);
        //kết nối
        include('../constants.php');

        //truy vấn tt
        $sql = "SELECT * FROM admin WHERE name = '$email' and pass = '$pass'";
        $result = mysqli_query($conn, $sql);

        //xác thực, đăng nhập
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user_name = $row['name'];
                $passTrue = $row['pass'];
            }

            if ($pass == $passTrue) {
                header("Location:food.php");
                $_SESSION['login'] = $user_name;
            } else {
                echo 'Mật khẩu không chính xác';
                header("Location:saler.php");
            }
        } else {
            echo 'Email không chính xác';
            header("Location:saler.php");
        }

        //đóng kết nối

    }
    ?>