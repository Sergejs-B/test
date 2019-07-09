<?php 
    class Book extends Product{
   	
		function __construct(string $sku,string $name,string $price,string $weight){
			parent::__construct($sku, $name, $price);
			$this->set_attribute($weight);
		}

			function set_attribute($weight) {
			$this->attribute ='Weight: '.$weight." KG";
		}

	}


    
 ?>