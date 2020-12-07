	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sellerbi";
	$port = 3307;
	$response = array();

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
	// Check connection
	if ($conn) {
		$sql = "SELECT * from products";
		$result = mysqli_query ($conn, $sql);
		if ($result){
				header("content-type: JSON ");
			$i=0;
			while ($row = mysqli_fetch_assoc($result)){
				$response[$i]['order_id'] = $row['order_id'];
				$response[$i]['customer_id'] = $row['customer_id'];
				$response[$i]['merchant_id'] = $row['merchant_id'];
				$response[$i]['order_ref_num'] = $row['order_ref_num'];
				$response[$i]['customer'] = $row['customer'];
				$response[$i]['phone'] = $row['phone'];
				$response[$i]['city'] = $row['city'];
				$response[$i]['created_at'] = $row['created_at'];
				$response[$i]['grand_total'] = $row['grand_total'];
				$response[$i]['order_type'] = $row['order_type'];
				$i++;

			}
	echo json_encode($response,JSON_PRETTY_PRINT);
		}
	}
		else {
			
			echo "databse connection failed";

						}

	?>