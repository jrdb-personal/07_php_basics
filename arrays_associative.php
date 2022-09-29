<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Associative Arrays</h2>
	<?php
		$cars = ["1stCar" => 'Volvo', 77=>"BMW", 88 =>"Toyota"];
		//$cars = array("1stCar"=>"Volvo", 77=>"BMW", 88=>"Toyota");
		echo "I like " . $cars["1stCar"] . ", " . $cars[77] . " and " . $cars[88] . ".";
	?>
</body>
</html>