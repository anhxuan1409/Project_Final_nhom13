<?php
include('header.php')
?>

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
                        <img src="img/maxresdefault.jpg" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/occhao.jpg" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/photo3jpg_822.jpg" class="d-block img-fluid rounded mx-auto d-block" style="width: 65%;">
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
                            <a href="#" class="category-item__link">Khuyến mãi</a>
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
                <div class="row" style="margin-top:15px;justify-content: start;">
                <?php

                                $sql = "SELECT * FROM foods limit 8 ";
                                $res = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($res)) { ?>


                                    <div class="col-md-3 mb-5 text-center zoom zoom">
                                        <a href="food.php?foodisbn=<?php echo $row['food_isbn']; ?>"  class=" text-decoration-none text-dark">
                                            <div class="card" style="height: 23rem;">
                                                <img style="height: 75%;width: 100%;object-fit: cover; padding-bottom: 15px ;" src="<?php echo $row['food_image']; ?>">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $row['food_title'] ?></h5>
                                                    <h5 class="card-title"><?php echo $row['food_price'] ?></h5>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                <?php }
                                ?>
                <div class="col text-end">
                                    <a href="foods.php" class="text-decoration-none text-danger">Xem Thêm <i class="fas fa-caret-right"></i></a>
                                </div>
            
                    
                </div>
            </div>
        </div>
    </div>



<?php
include("footer.php");
?>




    