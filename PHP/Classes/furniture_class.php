<?php 
    class Furniture extends Product{
   
		function __construct(string $sku, string $name, string $price, string $attribute, string $height, string $width, string $length){
			parent::__construct($sku, $name, $price, $attribute);
			$this->set_attribute($height ,$width, $length);
		}


		function set_attribute($height,$width,$length) {
			$this->attribute = 'Dimensions: '.$height.' x '.$width.' x '.$length.' cm';
		}

	}


    
 ?>