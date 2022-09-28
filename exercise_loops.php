<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Looping Construct Exercise</h2>
	<?php

	$cols = 4;
	$rows = 4;
	$title = "My Item List";
	
	$cars = array("Volvo","BMW","Toyota", "Ford", "Mazda");
	$names = ["John", "Joe", "Jane", "Sam", "Ben"];
	$letters = ["x", "y", "z", "a", "b"];
	$numbers = [1, 5, 3, 6, 7];
	
	echo "<table border=1>";
	echo "<th colspan = 5>". $title. "</th>";
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


/*
	$array1 = [1, 2, 3, 4, 5];
	$array2 = [6, 7, 8, 9, 10];
	$array3 = [11, 12, 13, 14, 15];
	$array4 = [16, 17, 18, 19, 20];
	$array5 = [21, 22, 23, 24, 25];

		echo "<table border=1>";
		echo "<th colspan = $cols>". $title. "</th>";
			for($x = 1; $x <= $rows; $x++){
				echo "<tr>";
					for ($y = 0; $y < $cols; $y++){
							switch($x){
							case 1:
								echo "<td>".$array1[$y]."</td>";
								break;
							case 2:
								echo "<td>".$array2[$y]."</td>";
								break;
							case 3:
								echo "<td>".$array3[$y]."</td>";
								break;
							case 4:
								echo "<td>".$array4[$y]."</td>";
								break; 
							default:
								echo "<td>".$array5[$y]."</td>";
								break;
						}
					}
				echo "</tr>";				
			}
		echo "</table>";
*/

		$cols = 4;
		$rows = 4;
		$tile = "table header";

		echo "<table border=1>";
		echo "<th colspan = $cols>". $title. "</th>";
			$max = 0;
			for($x = 1; $x <= $rows; $x++){
				echo "<tr>";
					for ($y = 1; $y <= $cols; $y++){
						echo "<td>".($y+$max)."</td>";
					}
				echo "</tr>";
				$max =($y+$max)-1;
				
			}
		echo "</table>";
	
	?>


</body>
</html>