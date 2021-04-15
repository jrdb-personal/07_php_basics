<!DOCTYPE html>
<html>
<head>
	<title>PHP Day 1 - Indexed Arrays</title>
</head>
<body>
	<?php 
		$cars = array("Volvo","BMW","Toyota");
		$cars = ['Volvo', 'BMW', 'Toyota'];

		echo $cars[0]."<br>";
		echo $cars[1]."<br>";
		echo $cars[2]."<br>";

		$names = ["John", "Joe", "Jane"];
		
		echo $names[2]."<br>";
		echo $names[1]."<br>";
		echo $names[0]."<br>";
	?>
</body>
</html>