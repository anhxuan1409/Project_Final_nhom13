<?php
include('../constants.php')
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/unnamed(1).png" type="image/x-icon" />
    <link rel="stylesheet" href="login.css">
    <title>Foody</title>
</head>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <form class="card-body cardbody-color p-lg-5" method="post">

                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <label for="floatingInput">Tên đăng nhập </label>
                            <input type="text" class="form-control" name="name" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="floatingPassword">Mật khẩu</label>
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <div class="text-center"><button name="submit" type="submit" class="btn btn-color px-5 mb-5 w-100">Đăng nhập</button></div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = md5($_POST['pass']);



    echo $sql = "SELECT * FROM administrators WHERE name='$name' and pass = '$pass'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $pass_save = $row['pass'];
        if ($pass == $pass_save) {
            $_SESSION['user_administrators'] = $name;
            header("Location:" . SITEURL . "administrators/index.php");
        } else {
            $response = 'mat khau sai';
            header("Location:" . SITEURL . "administrators/login.php?response=$response");
        }
    } else {
        $response = "email sai";
        header("Location:" . SITEURL . "administrators/login.php?response=$response");
    }
}




include('footer.php');
?>