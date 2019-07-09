<?php
	class Product {

		private $sku;
		private $name;
		private $price;
		public $attribute;

		public function __construct(string $sku,string $name,string $price, string $attribute) {
			$this->sku = $sku;
			$this->name = $name;
			$this->price = $price;
			$this->attribute = $attribute;

			
		}

		public function get_sku() {
			return $this->sku;
		}

		public function get_name() {
			return $this->name;
		}

		public function get_price() {
			return $this->price;
		}

		public function get_attribute() {
			return $this->attribute;
		}

		
	}