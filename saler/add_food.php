<?php
include("./header.php");
ob_start();
?>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col d-flex"><a href="saler.php"><i class="fas fa-chevron-left "></i></a>
            <h4 class="ms-2">Trở lại trang chủ</h4>
        </div>
        <div class="col text-end"><a href="./admin_food.php"><button class="btn btn-outline-danger" type="submit">Hủy</button></a></div>
    </div>
    <div class="row">
        <div class="col border p-3 rounded-2 mt-3">
            <form method="POST" class="row g-3 " enctype="multipart/form-data">
                <div class="col-md-4">
                    <label for="food_isbn" class="form-label">Mã</label>
                    <input type="text" name="food_isbn" class="form-control" id="food_isbn" >
                </div>
                <div class="col-md-4">
                    <label for="food_title" class="form-label">Tên món</label>
                    <input type="text" name="food_title" class="form-control" id="food_title" >
                </div>
                <div class="col-md-4">
                    <label for="food_Category" class="form-label">Loại</label>
                    <input type="text" name="food_Category" class="form-control" id="food_Category" >
                </div>
                <div class="col-md-4">
                    <label for="food_descr" class="form-label">Mô tả</label>
                    <input type="text" name="food_descr" class="form-control" id="food_descr" >
                </div>
                <div class="col-md-4">
                    <label for="food_price" class="form-label">Giá bán</label>
                    <input type="text" name="food_price" class="form-control" id="food_price" >
                </div>
                <div class="col-md-4">
                    <label for="idAd" class="form-label">Mã người bán</label>
                    <input type="text" name="idAd" class="form-control" id="idAd">
                </div>
                <div class="col">
                    <label for="avatar" class="form-label">Thay đổi ảnh</label>
                    <input type="file" id="fileToUpload" name="fileToUpload" accept="images/*" class=" mb-3 form-control" value="chọn ảnh">
                    <div class="preview mb-3">
                        <div id="preview">
                            <img src="#" hidden />
                        </div>
                        <div id="err"></div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-outline-danger ">
                        <h5>Thêm</h5x>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");



//Process the Value from Form and Save it in Database

//Check whether the submit button is clicked or not

if (isset($_POST['submit'])) {


    //echo "CLicked";

    //1. Get the DAta from Form
    $food_isbn = $_POST['food_isbn'];
    $food_title = $_POST['food_title'];
    $food_Category = $_POST['food_Category'];
    $food_descr = $_POST['food_descr'];
    $food_price = $_POST['food_price'];
    $idAd = $_POST['idAd'];


    $target_dir = "../img/img_addfood/"; //chỉ định thư mục nơi tệp sẽ được đặt
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //chỉ định đường dẫn của tệp sẽ được tải lên
    $uploadOk = 1; //chưa được sử dụng (sẽ được sử dụng sau)
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //giữ phần mở rộng tệp của tệp 

    $target_dir_2 = "../img/img_addfood/";
    $target_file_2 = $target_dir_2 . basename($_FILES["fileToUpload"]["name"]); //chỉ định đường dẫn của tệp sẽ được tải lên


    // kiểm tra kích cỡ ảnh
    if (
        $_FILES["fileToUpload"]["size"] > 500000
    ) {
        echo "Xin lỗi,cỡ ảnh bạn quá lớn.";
        $uploadOk = 0;
    }

    // cho phép các dạng form ảnh
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo " Xin lỗi, chỉ có tệp JPG, JPG, PNG & GIF được phép.";
        $uploadOk = 0;
    }

    // kiểm tra nếu $uploadOk = 0
    if ($uploadOk == 0) {
        echo "Xin lỗi, tập tin của bạn đã không được tải lên.";
        // Hoàn thành tải lên tập tin PHP Script
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Tệp " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã thành công.";
        } else {
            echo "Xin lỗi, đã có lỗi tải lên tệp của bạn.";
        }
    }

    $sql = "INSERT INTO `foods`(`food_isbn`, `food_title`,`food_image`, `food_Category`, `food_descr`, `food_price`, `idAd`) 
    VALUES ('$food_isbn','$food_title','$target_file_2','$food_Category','$food_descr','$food_price','$idAd' )";
   
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: add_food.php"); //Chuyển hướng lỗi
    }else{
        header("location: saler.php"); //Chuyển hướng lại Trang Quản trị
    }
}

?>
<script type="text/javascript" src="../js/edit-js.js"></script>