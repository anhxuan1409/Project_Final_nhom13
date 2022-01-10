<?php
session_start();
include("../constants.php");
?>
<?php
if (!isset($_SESSION['login'])) {
    header("Location:saler.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="../img/unnamed(1).png" type="image/x-icon" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <title>Foody</title>
</head>

<body>

    <header class="my-header">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php">
                        <img src="img/logo-new.png" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </header>
</body>