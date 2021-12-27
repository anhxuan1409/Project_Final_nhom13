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

                                   

                                    <?php

                                    $conn = mysqli_connect('localhost', 'root', '', 'foody');
                                    if (!$conn) {
                                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                    }

                                    $sql = "SELECT * FROM db_user WHERE user_email = '" .  $_SESSION ['isLoginOK'] . "'";
                                    $result = mysqli_query($conn, $sql);
                                    $tmp  = mysqli_fetch_array($result);
                                    echo $tmp['user_name']; ?>



                                
                                    
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="logout.php">
                                            <?php if (isset($_SESSION['isLoginOK'])) {
                                                echo "<a class='dropdown-item' href='logout.php'>Đăng xuất</a>";
                                            } ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  mt-sm-1 " style="font-size: 20px;">
                                <a class="nav-link active" href="cart.php"><i class="far fa-plus-square"></i></a>
                            </li>
                        </ul>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <div class="slide container-fluid">
        <div class="col-lg-12">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="documents/slide/foody1.png" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="documents/slide/foody2.jpg" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="documents/slide/foody3.jpg" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

    <div class="container p-lg-3">
        <div class="row justify-content-md-center">

            <div class="col-sm-3 col-lg-2 ">
                <nav class="category" style="font-size: 18px;font-weight: 100; ">
                    <h3 class="category__heading" style="background-color: whitesmoke;">
                        <i class="fas fa-utensils"></i>
                        <i class="fas category__heading-icon"></i>Danh mục
                    </h3>
                    <ul class="category-list">
                        <li class="category-item ">
                            <a href="#" class="category-item__link">Khuyễn mãi</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Blogs</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Bình luận</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">TV</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">12/12</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-sm-9 col-lg-10">
                <nav class="d-flex align-items-cente text-center ps-3" style="background-color: whitesmoke;">
                    <button class="btn btn-secondary btn btn btn-danger btn-sm" style="font-size: 18px;font-weight: 100;color: black;">Mới nhất</button>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle btn btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px;font-weight: 100;color: black;">
                            Ẩm thực
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Món Bắc</a></li>
                            <li><a class="dropdown-item" href="#">Món Trung</a></li>
                            <li><a class="dropdown-item" href="#">Món Nam</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle btn btn btn-danger " type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px;font-weight: 100;color: black;">
                            Danh mục
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Đồ ăn nhanh</a></li>
                            <li><a class="dropdown-item" href="#">Đồ ăn vặt</a></li>
                            <li><a class="dropdown-item" href="#">Đồ ăn cho bé</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="row" style="margin-top:40px;">

                    <div class="col-sm-3 col-lg-2.5 zoom zoom">
                        <div class="d-flex justify-content-center container ">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/pizza-ha-noi.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Pizza</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>100.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/thit_trau_gac_bep.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Thịt trấu gác bếp</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>300.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/7e0af56e-trà-sữa-tiger-sugar.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Tiger Sugar</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>50.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/banh-mi-thit-bo-nuong.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Bánh mì bò</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>15.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-top:40px;">

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/banh_trang.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Bánh tráng</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>10.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/bun-thai-hai-san.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Bún hải sản</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>100.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/banh-da-tron-thumbnail.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Bánh đa A. Béo</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>40.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/ga_kfc.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">KFC Định Công</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>100.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-top:40px;">

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/mua-cafe-trung-nguyen-2.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Cafe Trung Nguyên</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>20.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/toboki.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Tokbokki</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>25.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/xoi-yen.jpg">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Xôi Yến</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>30.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-2.5 zoom">
                        <div class="d-flex justify-content-center container">
                            <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                                <div class="about-product text-center mt-2"><img class="img-fluid mb-3" src="documents/images/hl.png">
                                    <div>
                                        <a href="" style="text-decoration: none; color: black;">
                                            <h5>Quán Bà Yến</h5>
                                        </a>
                                        <button type="button" class="btn btn-danger mt-2 mb-2" onclick="t();"><i class="fas fa-plus"></i></button>
                                        <h6 class="mt-3 text-black-50">Cream HL</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Giá</span><span>50.000 VND</span></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        function t() {
            swal("", "Thêm món thành công!", "success");
        }
    </script>

<?php
    include("template/footer.php");
?>