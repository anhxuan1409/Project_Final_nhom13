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
                <form class="form-signin" action="process_login_saler.php" method="post">
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>

                        </div>
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox" style="margin:10px 0;">
                            <label style="float:left;">
                                <input type="checkbox"> Lưu mật khẩu
                            </label>
                        </div>

                        <div style="clear:both;float:left;width:100%;margin-top:15px;" class="d-flex align-items-center mb-2 d-flex justify-content-center text-center">
                            <button class="btn btn-lg btn-block mt-3 d-flex align-items-center mb-2 d-flex justify-content-center text-center" type="submit" name="btnSignIn" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">Đăng nhập</button>
                        </div>
                        <div class="mt-3 mb-3 justify-content-center justify-content-center text-center">
                            <?php
                            if (isset($_GET['error'])) {
                                echo "<div style='color:red; margin-left: 30px'> {$_GET['error']} </div>";
                            }

                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("template/footer.php");
?>