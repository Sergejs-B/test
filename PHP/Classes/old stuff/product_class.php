<?php
	class Product {
		public $product_id;
		public $product_sku;
		public $product_price;
	 	public $product_name;

	  	public function add_product() {
	  		require_once 'PHP/database.php';
	
	  		$this->product_id = $_POST['id'];
        	$this->product_sku = $_POST['SKU'];
    
        	$sql = "INSERT INTO 'product' ('id', 'SKU') VALUES (NULL, '$this->SKU')";
     		$results = mysql_query($sql);
    
     		if($results) {
	      		echo "Success";
    		} else {
      			echo mysql_error();
        	}
	  	}
	}


?>