<?php




	function getfoodprice($isbn)
	{
		$conn = mysqli_connect("localhost", "root", "", "btlweb");

		$query = "SELECT food_price FROM foods WHERE food_isbn = '$isbn'";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			echo "get food price failed! " . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['food_price'];
	}

	
	



	function total_price($cart)
	{
		$price = 0.0;
		if (is_array($cart)) {
			foreach ($cart as $isbn => $qty) {
				$foodprice = getfoodprice($isbn);
				if ($foodprice) {
					$price += $foodprice * $qty;
				}
			}
		}
		return $price;
	}

	
	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $isbn => $qty){
				$items += $qty;
			}
		}
		return $items;
	}

	