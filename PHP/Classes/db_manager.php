<?php
require_once 'database.php';
require_once("Classes/product_class.php");
require_once("Classes/disc_class.php");
require_once("Classes/furniture_class.php");
require_once("Classes/book_class.php");
require_once("Classes/db_manager.php");
	class db_manager {

	

		public function add(Product $product) {
			$mysqli = new mysqli("localhost", "root", "", "new_schema");
			$sku = $product->get_sku();
			$name = $product->get_name();
			$price = $product->get_price();
			$attribute = $product->get_attribute();
			$sql = "INSERT INTO products (sku,name,price,attribute) values ('" . $sku . "','" . $name. "','" .$price.  "','" .$attribute. "')";
    
     		if(mysqli_query($mysqli,$sql) === TRUE) {
	      		echo "Success";
    		} else {
      			echo $sql . " Error: " . $mysqli->error;
        	}
		}

	}
