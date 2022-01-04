<?php
session_start();
include("connection.php");
include("head.php");
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
}
?>

    <header class="container-fluid">
        <div class="navbar fixed-top navbar-expand-lg navbar-light bg-light d-flex align-items-center d-flex justify-content-center">
            <div class="container-fluid" style="margin-left: 30%;">
                <a class="navbar-brand " href="home.php"><img src="documents/foody.png" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav  ">

                        <li class="nav-item dropdown mt-sm-1" style="font-size: 18px;">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vị trí</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Hà Nội</a></li>
                                <li><a class="dropdown-item" href="#">TP. Hò Chí Minh</a></li>
                                <li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown  mt-sm-1 " style="font-size: 18px;">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Loại hình</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Đồ ăn</a></li>
                                <li><a class="dropdown-item" href="#">Đồ uống</a></li>
                            </ul>
                        </li>

                        <form class="d-flex">
                            <div class="input-group ">
                                <input type="text" class="form-control mt-sm-2" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 30px;">
                                <div class="input-group-append">
                                    <span class="input-group-text mt-md-2" id="basic-addon2"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </form>

                        <ul class="navbar-nav  ">
                            <li class="nav-item dropdown  mt-sm-1 " style="font-size: 18px;">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                   

                                    