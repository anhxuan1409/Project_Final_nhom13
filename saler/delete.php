<?php
    include("./header.php");
	$food_isbn = $_GET['foodisbn'];
	$query = "DELETE FROM foods WHERE food_isbn = '$food_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: food.php");
?>