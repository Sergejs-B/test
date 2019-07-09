<?php

	class Disc extends Product {
		

		function __construct(string $sku,string $name,string $price, string $attribute, string $disc){
			parent:: __construct($sku, $name, $price,$attribute);
			$this->set_attribute($disc);

		}
		
		function set_attribute($disc) {
			$this->attribute = 'Size: ' .$disc." MB"  ;

		}
	
	}

