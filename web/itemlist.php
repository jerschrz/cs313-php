<?php
	class Listing {
		public $name;
		public $image;
		public $price;
		public $quantity = 0;

		function setName($temp) {
			$this->name = $temp;
		}
		function setImage($temp) {
			$this->image = $temp;
		}
		function setPrice($temp) {
			$this->price = $temp;
		}
		function getName() {
			return $this->name;
		}
		function getImage() {
			return $this->image;
		}
		function getPrice() {
			return $this->price;
		}
		function setQuantity($temp) {
			$this->quantity = $quantity;
		}
		function getQuantity() {
			return $this->quantity;
		}
	}

	$listings = array();

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 1");
	$tempitem->setImage("");
	$tempitem->setPrice("$0.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 2");
	$tempitem->setImage("");
	$tempitem->setPrice("$2.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 3");
	$tempitem->setImage("");
	$tempitem->setPrice("$0.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 4");
	$tempitem->setImage("");
	$tempitem->setPrice("$9.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 5");
	$tempitem->setImage("");
	$tempitem->setPrice("$4.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 6");
	$tempitem->setImage("");
	$tempitem->setPrice("$19.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 7");
	$tempitem->setImage("");
	$tempitem->setPrice("$0.99");
	array_push($listings, $tempitem);
	unset($tempitem);

	$tempitem = new Listing;
	$tempitem->setName("Sample Item 8");
	$tempitem->setImage("");
	$tempitem->setPrice("$4.99");
	array_push($listings, $tempitem);
	unset($tempitem);

?>