<?php
	require_once("Classes/database.php");
	require_once("Classes/product_class.php");

		$sql = "SELECT * FROM products;";
		$result = mysqli_query($mysqli, $sql);

	function display_products() {
		global $mysqli;
		
		
		

		if ($resultCheck){
			while ($row = mysqli_fetch_assoc($result)){
				 
				$products = new Product($row['sku'],$row['name'],$row['price'],$row['attribute']);
				return $products;

			}

		}

	}
