<?php
	require_once("Classes/product_class.php");
	require_once("Classes/disc_class.php");
	require_once("Classes/furniture_class.php");
	require_once("Classes/book_class.php");
	require_once("Classes/db_manager.php");




	global $db;
	$db = new db_manager();
	$sku = $_POST['SKU'];
	$validation = "SELECT 'sku' FROM 'products' WHERE 'sku'=($sku); ";

	if ($validation){
		echo "SKU already exists";
		?><button onclick="window.location.href='/product.php'" class="navig_btn">Add new product</button>
		<?
	}
	else{
	

		switch ($_POST["swithcer"]) {

			case "disc":
				$product = new Disc ($_POST['SKU'], $_POST['name'], $_POST['price'], "nothing", $_POST['disc']);
				$db->add($product);
				break;
			
			case "book":
				$product = new Book ($_POST['SKU'], $_POST['name'], $_POST['price'], "nothing", $_POST['book']);
				$db->add($product);
				break;

			case "furniture":
				$product = new Furniture ($_POST['SKU'], $_POST['name'], $_POST['price'], "nothing", $_POST['height'], $_POST['width'], $_POST['length']);
				$db->add($product);
				break;

			default;
	        echo 'Пожалуйста, сделайте новый выбор...';
	    	break;

	    }



	header("Location:../index.php");
	}	
	?>