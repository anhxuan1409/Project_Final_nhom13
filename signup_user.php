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
            <a class="navbar-brand" href="index.php"><img src="documents/foody.png" class="img-fluid"></a>
        </div>
    </nav>


    <div class="container-fluid" style="padding-bottom: 80px;">
    <div>
        <div class="row d-flex align-items-center d-flex justify-content-center">
            <div class="col-md-offset-4 col-md-4 form">
                <div style="margin:10px 0;">
                    <h3 class="title"> Đăng kí FDID </h3>
                </div>
                <form class="form-signin" action="process_signup_user.php" method="post">
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Username" required autofocus>

                        </div>
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Đại chỉ mail" required autofocus>

                        </div>
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" id="inputPassword" name="txtPass1" class="form-control" placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-space input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" id="inputPassword" name="txtPass2" class="form-control" placeholder="Mật khẩu lần 2" required>
                        </div>

                        <div style="clear:both;float:left;width:100%;margin-top:15px;" class="d-flex align-items-center mb-2 d-flex justify-content-center text-center">
                            <button class="btn btn-lg btn-block mt-3 d-flex align-items-center mb-2 d-flex justify-content-center text-center" type="submit" name="btnSignUp" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">Đăng kí</button>
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