<?php
session_start();
include("connection.php");
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
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
    <link rel="stylesheet" href="assets/cart.css">
    <title>Foody</title>
</head>

<body>

    <div style="top: 0px; width: 100%; background-color: #D34836; height: 5px;"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 5px;">
        <div class="container-fluid" style="justify-content: center;justify-items: center;">
            <a class="navbar-brand" href="home.html"><img src="documents/foody.png" class="img-fluid"></a>
        </div>
    </nav>

    <div class="container-fluid mt-5 mb-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Giỏ hàng</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="documents/images/tra-sua.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Trà sữa</div>
                            </div>
                            <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                            <div class="col">44.000 VND <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="documents/images/tra-sua.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Trà sữa</div>
                            </div>
                            <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                            <div class="col">44.000 VND <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="documents/images/tra-sua.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Trà sữa</div>
                            </div>
                            <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                            <div class="col">44.000 VND <span class="close">&#10005;</span></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Thanh toán</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">3 Sản phẩm</div>
                        <div class="col text-right"> 132.000 VND</div>
                    </div>
                    <form>
                        <p>Địa chỉ</p> <input id="code" placeholder="...">
                        <p>Số điện thoại</p> <input id="code" placeholder="...">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">Tổng thanh toán (Đã tính phí ship và)</div>
                        <div class="col text-right"> 137.000 VND</div>
                    </div> <button class="btn">Hoàn tất</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("template/footer.php");
    ?>