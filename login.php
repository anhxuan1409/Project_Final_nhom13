<?php
require "template/header.php";
?>

<div class="container-fluid" style="padding-bottom: 80px;">
    <div>
        <div class="row d-flex align-items-center d-flex justify-content-center">
            <div class="col-md-offset-4 col-md-4 form">
                <div style="margin:10px 0;">
                    <h3 class="title"> Đăng nhập FDID </h3>
                </div>
                <form class="form-signin" action="process_login.php" method="post">
                    <div>
                        <a class="btn btn-lg btn-success btn-block d-flex align-items-center mb-2 d-flex justify-content-center text-center
                            " style="overflow: hidden;background-color:#4066b0; text-align: center;"> ĐĂNG NHẬP BẰNG FACEBOOK
                        </a>
                        <a class="btn btn-lg btn-success btn-block d-flex align-items-center mb-2 mt-2 d-flex justify-content-center text-center
                            " style="overflow: hidden;background-color:#D34836;"> ĐĂNG NHẬP BẰNG GOOGLE
                        </a>
                        <div class="text d-flex align-items-center d-flex justify-content-center text-center mb-2 mt-2">
                            <span>hoặc bằng email</span>
                        </div>
                        