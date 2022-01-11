<?php
    include("./header.php");
	$food_ad_id = $_GET['foodadid'];
	$query = "DELETE FROM foods_add WHERE food_ad_id = '$food_ad_id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: reply.php");
?>