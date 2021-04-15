<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Associative Arrays</h2>
	<?php
		$cars = array("A"=>"Volvo", 77=>"BMW", 88.8=>"Toyota");
		$cars = ["A" => 'Volvo', 77=>"BMW", 88.8 =>"Toyota"];
		echo "I like " . $cars["A"] . ", " . $cars[77] . " and " . $cars[88.8] . ".";
	?>
</body>
</html>