<?php 
	interface Mobility{
		function moveForward($direction, $startingpoint);
		function moveFaster($speedinc);
		function stopMoving();
	}
	class Animal implements Mobility{
		function moveForward($direction, $startingpoint){
			return $result = $startingpoint*4 + $direction;
		}
		function stopMoving(){
			return false;
		}
		function moveFaster($speedinc){
		}
	}
	class AutoMobile implements Mobility{
		function moveForward($direction, $startingpoint){
			return $result = $startingpoint*10 + $direction;
		}
		function stopMoving(){
			return true;
		}
		function moveFaster($speedinc){
		}
	}
	$objAnimal = new Animal;
	echo "Animal Speed: ". $objAnimal->moveForward(5,7)."<br>";

	$objAutoMobile = new AutoMobile;
	echo "AutoMobile Speed: ". $objAutoMobile->moveForward(5,7)."<br>";







?>