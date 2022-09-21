<?php
	class Books { 
		/* Member variables */ 
		var $title;
		var $price;
		//static $var;
		function __construct($title="Test Title"){
			$this->title = $title;
		}
		function setTitle($title){
			$this->title = $title;
		}
		function getTitle(){
			return $this->title;
		}
		function setPrice($price){
			$this->price = $price;
		}
		function getPrice(){
			return $this->price;
		}
	}


$objBook1 = new Books;
$objBook1->setTitle("Lord of the Rings");
echo $objBook1->getTitle()."<br>";

$objBook2 = new Books;
$objBook2->setTitle("Harry Potter");
echo $objBook2->getTitle()."<br>";





?>