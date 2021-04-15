<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Collaborating Server and Client - Exercise</h2>
	<?php

	$cols = 4;
	$rows = 4;
	$title = "My Item List";

	$cars = array("Volvo","BMW","Toyota", "Ford", "Mazda");
	$names = ["John", "Joe", "Jane", "Sam", "Ben"];
	$letters = ["x", "y", "z", "a", "b"];
	$numbers = [1, 5, 3, 6, 7];

	echo "<table border=1>";
	echo "<th colspan = $cols>". $title. "</th>";
		for($x = $rows; $x > 0; $x--){
			echo "<tr>";
				for ($y = $cols; $y >= 0; $y--){
					echo "<td>";
						switch($x)
						{
							case 4: echo $numbers[$y]; break;
							case 3: echo $cars[$y];break;
							case 2: echo $names[$y];break;
							case 1: echo $letters[$y];break;
						}
					echo "</td>";
				}
			echo "</tr>";
		}
	echo "</table>";
	?>


</body>
</html>