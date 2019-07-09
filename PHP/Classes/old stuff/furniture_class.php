<?php 
    public class Furniture extends Product{
   
		function __construct(string $sku,string $name,double $price,string $attribute){
			parent::__construct(string $sku,string $name,double $price);
			$this->set_attribute(string $height,string $width, string $length);
		}


		function set_attribute($height,$width,$length) {
			$this->attribute = $height.'x'.$width.'x'.$length;
		}

	}


    }
 ?>