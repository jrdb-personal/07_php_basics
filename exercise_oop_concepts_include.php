<?php 
	abstract class Item implements ImageHandler{
		public $itemcode;
		public $itemname;
		public $itemdescription;

		public $itemcolor;
		public $itemsize;
		public $itemmodel;

		public $itemimage;

		function __construct($itemcode, $itemname, $itemdescription){
			$this->itemcode = $itemcode;
			$this->itemname = $itemname;
			$this->itemdescription = $itemdescription;
		}

		function setItemCode($itemcode){
			$this->itemcode = $itemcode;
		}

		function getItemCode(){
			return $this->itemcode;
		}

		function setItemName($itemname){
			$this->itemname = $itemname;
		}

		function getItemName(){
			return $this->itemname;
		}

		function setItemDescription($itemdescription){
			$this->itemdescription = $itemdescription;
		}

		function getItemDescription(){
			return $this->itemdescription;
		}

		function setProperty($property){

			/*
			$this->itemcolor = $color;
			$this->size = $size;
			$this->model = $model;
			*/
		}

		function getProperty(){
			/*
			$property = array($this->itemcolor, $this->size, $this->model);
			*/
			return $property;

		}

		function setImage($image){
		}

		function getImage(){
		}

	}

	class CategoryX extends Item{
		function setProperty($color){
			$this->itemcolor=$color;
		}

		function getProperty(){
			return $this->itemcolor;
		}
	}


	class CategoryY extends Item{
		function setProperty($size){
			$this->itemsize=$size;
		}

		function getProperty(){
			return $this->itemsize;
		}
	}

	class CategoryZ extends Item{
		function setProperty($model){
			$this->itemmodel=$model;
		}

		function getProperty(){
			return $this->itemmodel;
		}
	}


	abstract class User implements ImageHandler{
		public $username;
		public $useremail;
		public $userpassword;

		public $userimage;

		function setImage($image){
		}

		function getImage(){
		}

	}

	interface ImageHandler{
		function setImage($image);
		function getImage();
	}


?>