<?php 
include("exercise_oop_concepts_include.php");

	if (isset($_POST['itemcode']) && !empty($_POST['itemcode'])
			&& isset($_POST['itemname']) && !empty($_POST['itemname'])
			&& isset($_POST['itemdescription']) && !empty($_POST['itemdescription']
		)
		){

		switch($_POST['itemcategory']){
			case "CategoryX":
			$objCatX = new CategoryX($_POST['itemcode'],$_POST['itemname'],$_POST['itemdescription']);
			if (isset($_POST['itemcolor']) && !empty($_POST['itemcolor'])){
				$objCatX->setProperty($_POST['itemcolor']);
				echo "Item Code: ".$objCatX->getItemCode()."<br>";
				echo "Item Name: ".$objCatX->getItemName()."<br>";
				echo "Item DescriptionCode: ".$objCatX->getItemDescription()."<br>";
				echo "Item Color: ".$objCatX->getProperty()."<br>";	
			}

			else {
				echo "Additional Required field (Color) is not provided";
			}

			break;


			case "CategoryY":
			$objCatY = new CategoryY($_POST['itemcode'],$_POST['itemname'],$_POST['itemdescription']);
			if (isset($_POST['itemsize']) && !empty($_POST['itemsize'])){
				$objCatY->setProperty($_POST['itemsize']);
				echo "Item Code: ".$objCatY->getItemCode()."<br>";
				echo "Item Name: ".$objCatY->getItemName()."<br>";
				echo "Item DescriptionCode: ".$objCatY->getItemDescription()."<br>";
				echo "Item Size: ".$objCatY->getProperty()."<br>";		
			}

			else {
				echo "Additional Required field (Size) is not provided";
			}

			break;


			case "CategoryZ":
			$objCatZ = new CategoryZ($_POST['itemcode'],$_POST['itemname'],$_POST['itemdescription']);
			if (isset($_POST['itemmodel']) && !empty($_POST['itemmodel'])){
				$objCatZ->setProperty($_POST['itemmodel']);
				echo "Item Code: ".$objCatZ->getItemCode()."<br>";
				echo "Item Name: ".$objCatZ->getItemName()."<br>";
				echo "Item DescriptionCode: ".$objCatZ->getItemDescription()."<br>";
				echo "Item Model: ".$objCatZ->getProperty()."<br>";		
			}

			else {
				echo "Additional Required field (Model) is not provided";
			}
			break;


			default:

			break;

		}
	}


	else {
		//Display should provide all required fields


	}
		




?>